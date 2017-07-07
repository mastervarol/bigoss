<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Antrian;
use Carbon\Carbon;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function indexantrian()
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

    public function indexsiaplapor()
    {
        return view('siaplapor.dashboard');
    }

    public function meong()
    {
        //Mail::to("dani.akbarr@gmail.com")->send(new TiketAntrian(new Antrian));
        $antrian = Antrian::find(7);
        return view('email.email1')->with('antrian', $antrian);
    }
}
