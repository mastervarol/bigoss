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
use Illuminate\Support\Facades\Log;

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

        Session::flash('msgsave', 'Pendaftaran antrian berhasil');
        return redirect('antrianonline');
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

        //batasi senin - kamis jam 08.00-11.30 (3 jam 30 menit) dan 12.15-15.00 (2 jam 45 menit)
        //batasi jumat jam 08.00-11.30 (3 jam 30 menit)
        //cek hari jika senin - kamis / jumat
        if($tglantri->dayOfWeek < 5)
        {
            //berarti senin - kamis
            $sesi1mulai = (clone $tglantri);
            $sesi1selesai = (clone $tglantri);
            $sesi2mulai = (clone $tglantri);
            $sesi2selesai = (clone $tglantri);

            $sesi1mulai->hour = 8;
            $sesi1mulai->minute = 00;
            $sesi1selesai->hour = 11;
            $sesi1selesai->minute = 30;

            $sesi2mulai->hour = 12;
            $sesi2mulai->minute = 15;
            $sesi2selesai->hour = 15;
            $sesi2selesai->minute = 0;
        }
        else
        {
            //berarti jumat
            $sesi1mulai = (clone $tglantri);
            $sesi1selesai = (clone $tglantri);
            
            $sesi1mulai->hour = 8;
            $sesi1mulai->minute = 00;
            $sesi1selesai->hour = 11;
            $sesi1selesai->minute = 30;
        }

        $awalsesi = true;

        $antriantersedia = array();
        for ($i=0; $i < $layanan->kuota_harian; $i++) { 
            if($awalsesi)
            {
                if(!$antrian->contains('tgl', $jammulai->toDateTimeString()))
                {
                    $jamselesai = (clone $jammulai);
                    $jamselesai->addMinutes($layanan->durasi_layanan);
                    $antriantersedia[$i]['jammulai'] = $jammulai->format('G:i');
                    $antriantersedia[$i]['jamselesai'] = $jamselesai->format('G:i');
                }

                $awalsesi = false;

                //Log::info('meong awal');
            }
            else
            {
                //check sesi
                if($tglantri->dayOfWeek < 5)
                {
                    $jammulai->addMinutes($layanan->durasi_layanan);
                    $jamselesai = (clone $jammulai);
                    $jamselesai->addMinutes($layanan->durasi_layanan);
                    
                    if($jammulai->between($sesi1mulai, $sesi1selesai)
                        && $jamselesai->between($sesi1mulai, $sesi1selesai))
                    {
                        if(!$antrian->contains('tgl', $jammulai->toDateTimeString()))
                        {
                            $antriantersedia[$i]['jammulai'] = $jammulai->format('G:i');
                            $antriantersedia[$i]['jamselesai'] = $jamselesai->format('G:i');    
                        }

                        //Log::info('meong senin kamis sesi 1');
                    }
                    elseif($jammulai->between($sesi1selesai, $sesi2mulai))
                    {
                        $jammulai->hour = 12;
                        $jammulai->minute = 15;
                        $awalsesi = true;

                        //Log::info('meong senin kamis istirahat');
                    }
                    elseif($jammulai->between($sesi2mulai, $sesi2selesai)
                        && $jamselesai->between($sesi2mulai, $sesi2selesai))
                    {    
                        if(!$antrian->contains('tgl', $jammulai->toDateTimeString()))
                        {
                            $antriantersedia[$i]['jammulai'] = $jammulai->format('G:i');
                            $antriantersedia[$i]['jamselesai'] = $jamselesai->format('G:i');    
                        }

                        //Log::info('meong senin kamis sesi 2');
                    }
                }
                else
                {
                    $jammulai->addMinutes($layanan->durasi_layanan);
                    $jamselesai = (clone $jammulai);
                    $jamselesai->addMinutes($layanan->durasi_layanan);
                            
                    if($jammulai->between($sesi1mulai, $sesi1selesai)
                        && $jamselesai->between($sesi1mulai, $sesi1selesai))
                    {
                        if(!$antrian->contains('tgl', $jammulai->toDateTimeString()))
                        {
                            $antriantersedia[$i]['jammulai'] = $jammulai->format('G:i');
                            $antriantersedia[$i]['jamselesai'] = $jamselesai->format('G:i');    
                        }

                        //Log::info('meong jumat sesi 1');
                    }
                }
            }
        }

        $data['layanan'] = $layanan;
        $data['antriantersedia'] = $antriantersedia;
        //return Carbon::today()->addDay();
        return json_encode($data);
    }
}
