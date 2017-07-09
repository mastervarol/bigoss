<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Session;
use App\Laporan;
use Auth;

class LaporanController extends Controller
{
    public function pelaporan()
    {
        return view('siaplapor.laporkan');
    }

    public function storepelaporan(Request $request)
    {
    	//validasi
        $validator = Validator::make($request->all(), Laporan::$rules);

        if ($validator->fails()) {
            return redirect('siaplapor/pelaporan')
                        ->withErrors($validator)
                        ->withInput();
        }

        //Proses inputan
        //ambil user yang login
        $userlogin = Auth::user();

        //buat variable izin
        $laporan = new Laporan;
        $laporan->judul = $request->judul;
        $laporan->laporan = $request->laporan;

        //set created by
        $laporan->pelapor()->associate($userlogin);

        //simpan izin baru
        $laporan->save();

        Session::flash('msgsave', 'Laporan berhasil');
        return redirect('siaplapor');
    }

    public function laporansaya()
    {
        $laporan = Laporan::where('created_by', Auth::user()->id_user)->orderBy('created_at', 'desc')->get();
        
        return view('siaplapor.laporansaya')->with(array(
            'laporan' => $laporan
            ));
    }
}
