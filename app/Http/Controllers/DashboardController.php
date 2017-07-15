<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Antrian;
use App\Laporan;
use Carbon\Carbon;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function indexantrian()
    {
        if(Auth::user() != null)
        {
            $antrian = Antrian::with('pemohon', 'loket', 'layanan', 'layanan.izin')
            ->where('status', 1)
            ->where('id_user', Auth::user()->id_user)
            ->where(DB::raw('date(tgl)'), '<=', Carbon::today()->addDay())
            ->first();

            //return json_encode($antrian);
            return view('antrian.dashboard')->with(array(
            'antrian' => $antrian
            ));
        }
        else
        {
            return view('antrian.dashboard')->with(array(
            'antrian' => null
            ));
        }
    }

    public function indexsiaplapor()
    {
        $laporans = Laporan::whereNotNull('published_by')->whereNotNull('tanggapan_by')->orderBy('created_at', 'desc')->get();
        
        return view('siaplapor.dashboard')->with(array(
            'laporans' => $laporans,
            ));
    }

    public function meong()
    {
        //Mail::to("dani.akbarr@gmail.com")->send(new TiketAntrian(new Antrian));
        $antrian = Antrian::find(11);
        //return json_encode($antrian);
        return view('email.email1')->with('antrian', $antrian);
    }
}
