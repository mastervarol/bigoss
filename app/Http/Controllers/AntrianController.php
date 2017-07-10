<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;
use App\Izin;
use App\Layanan;
use App\Antrian;
use App\Loket;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TiketAntrian;

class AntrianController extends Controller
{
    public function pendaftaran()
    {
        $izins = Izin::all();
        
        setlocale(LC_TIME, 'Indonesian');
        $tglantri = Carbon::now('Asia/Makassar');
        $tglantri->addDay();
        
        //skip hari libur
        while($tglantri->isWeekend())
        {
            $tglantri->addDay();
        }

        $antrian = Antrian::where(DB::raw('date(tgl)'), $tglantri->toDateString())
            ->where('id_user', Auth::user()->id_user)->first();

        return view('antrian.pendaftaran')->with(array(
        	'izins' => $izins,
            'tglantri' => $tglantri,
            'antrian' => $antrian
        	));
    }

    public function storependaftaran(Request $request)
    {
        $userlogin = Auth::user();
        $layanan = Layanan::find($request->layanan);
        $loket = Loket::find($request->loket);

        $antrian = new Antrian();
        $antrian->status = 1;
        $antrian->pemohon()->associate($userlogin);
        $antrian->loket()->associate($loket);
        $antrian->layanan()->associate($layanan);

        //generate token
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $random_string_length = 8;
        
        $gettoken = false;
        while(!$gettoken)
        {
            $token = '';
            $max = strlen($characters) - 1;
            for ($i = 0; $i < $random_string_length; $i++) {
                $token .= $characters[mt_rand(0, $max)];
            }

            $antriantmp = Antrian::where('token', $token)->get();

            if($antriantmp != null)
            {
                $gettoken = true;
                $antrian->token = $token;
            }
        }
        //end of generate token

        //set tanggal antrian
        $jamantri = explode(':', $request->waktu);

        $tglantri = Carbon::now('Asia/Makassar');
        $tglantri->addDay();
        $tglantri->hour = $jamantri[0];
        $tglantri->minute = $jamantri[1];
        $tglantri->second = 0;

        //skip hari libur
        while($tglantri->isWeekend())
        {
            $tglantri->addDay();
        }

        $antrian->tgl = $tglantri;
        //end of set tanggal antrian

        //set nomor pemohon
        $nomorpemohon = Antrian::where(DB::raw('date(tgl)'), Carbon::today()->addDay())->count();
        $nomorpemohon++;
        $antrian->nomor = $nomorpemohon;
        //end of set nomor pemohon

        $antrian->save();

        Mail::to($userlogin->email)->send(new TiketAntrian($antrian));

        return redirect('antrianonline');
        Session::flash('msgsave', 'Pendaftaran antrian berhasil');
    }   

    public function riwayat()
    {
        $antrians = Antrian::with('loket', 'layanan', 'layanan.izin')
            ->where('id_user', Auth::user()->id_user)
            ->get();

        return view('antrian.riwayat')->with(array(
            'antrians' => $antrians
            ));
    }

    //ajax
    public function ajax_layanan($idizin)
    {
    	$izin = Izin::find($idizin);
    	$layanan = $izin->layanan;

    	return json_encode($layanan);
    }

    public function ajax_loket($idlayanan)
    {
        $layanan = Layanan::find($idlayanan);
        $loket = $layanan->loket;

        return json_encode($loket);
    }

    public function ajax_waktu($idloket)
    {
        //set waktu mulai
        $layanan = Loket::find($idloket)->layanan[0];

        $jammulai = Carbon::now('Asia/Makassar');
        $jammulai->addDay(); 
        $jammulai->hour = 8;
        $jammulai->minute = 0;
        $jammulai->second = 0;

        //skip hari libur
        while($jammulai->isWeekend())
        {
            $jammulai->addDay();
        }
        
        //cek antrian besok pada loket
        $tglantri = Carbon::now('Asia/Makassar');
        $tglantri->addDay();

        //skip hari libur
        while($tglantri->isWeekend())
        {
            $tglantri->addDay();
        }

        $antrian = Antrian::where(DB::raw('date(tgl)'), $tglantri->toDateString())
            ->where('id_loket', $idloket)
            ->get();

        $antriantersedia = array();

        for ($i=0; $i < $layanan->kuota_harian; $i++) { 
            if($i == 0)
            {
                if(!$antrian->contains('tgl', $jammulai->toDateTimeString()))
                {
                    $antriantersedia[] = $jammulai->format('G:i');
                }
            }
            else
            {
                $jammulai->addMinutes($layanan->durasi_layanan);
                
                if(!$antrian->contains('tgl', $jammulai->toDateTimeString()))
                {
                    $antriantersedia[] = $jammulai->format('G:i');
                }
            }
        }

        $data['layanan'] = $layanan;
        $data['antriantersedia'] = $antriantersedia;
        //return Carbon::today()->addDay();
        return json_encode($data);
    }
}
