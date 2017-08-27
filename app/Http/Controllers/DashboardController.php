<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Antrian;
use App\Laporan;
use App\Loket;
use App\User;
use App\Layanan;
use App\Permohonan;
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
        $hariini = Carbon::today();
        $rekap = new \stdClass;
        $rekap->hantrianterlayani = Antrian::where('status', 2)->where(DB::raw('date(tgl)'), $hariini->toDateString())->count();
        $rekap->htotalantrian = Antrian::where(DB::raw('date(tgl)'), $hariini->toDateString())->count();
        
        $loket = Loket::all();
        $rekap->loket = $loket->count();
        $rekap->layanan = Layanan::all()->count();

        //cek jumlah antrian tersedia besok
        $besok = Carbon::today()->addDay();
        while($besok->isWeekend())
        {
            $besok->addDay();
        }

        if($besok->dayOfWeek < 5)
        {
            $menitsesi = 210 + 165;
        }
        else
        {
            $menitsesi = 210;
        }

        $jumlahantrian = 0;

        foreach ($loket as $lok) {
            if($lok->layanan->count() != 0)
            {
                $jumlahantrian = $jumlahantrian + floor($menitsesi/$lok->layanan[0]->durasi_layanan);
            }
        }

        $rekap->jumlahantrianbesok = $jumlahantrian;
        $rekap->antrianbesok = Antrian::where(DB::raw('date(tgl)'), $besok->toDateString())->count();

        if(Auth::user() != null)
        {
            $antrian = Antrian::with('pemohon', 'loket', 'layanan', 'layanan.izin')
            ->where('status', 1)
            ->where('id_user', Auth::user()->id_user)
            ->where(DB::raw('date(tgl)'), '>=', Carbon::today())
            ->orderBy('tgl', 'asc')
            ->first();

            return view('antrian.dashboard')->with(array(
            'antrian' => $antrian,
            'rekap' => $rekap
            ));
        }
        else
        {
            return view('antrian.dashboard')->with(array(
            'antrian' => null,
            'rekap' => $rekap
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

    public function indexundagi()
    {
        return view('undagi.dashboard');
    }

    public function meong()
    {
        //return env('PATH_PERMOHONAN');
    }
}
