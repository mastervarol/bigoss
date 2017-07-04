<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Izin;
use App\Layanan;

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

    public function ajax_waktu($id_loket)
    {
        $layanan = Layanan::find($idlayanan);
        $loket = $layanan->loket;

        return json_encode($loket);
    }
}
