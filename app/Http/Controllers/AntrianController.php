<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Izin;
use App\Layanan;
use App\Antrian;
use App\Loket;
use Carbon\Carbon;
use DB;

class AntrianController extends Controller
{
    public function pendaftaran()
    {
    	$izins = Izin::all();

        return view('antrian.pendaftaran')->with(array(
        	'izins' => $izins
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
        $jammulai->hour = 9;
        $jammulai->minute = 0;
        $jammulai->second = 0;
        
        //cek antrian besok pada loket
        $antrian = Antrian::where(DB::raw('date(tgl)'), Carbon::today()->addDay())
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

        //return Carbon::today()->addDay();
        return json_encode($antriantersedia);
    }
}
