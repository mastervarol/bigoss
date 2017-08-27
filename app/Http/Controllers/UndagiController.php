<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;
use App\Permohonan;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TiketPermohonanUndagi;
use Illuminate\Support\Facades\Log;

class UndagiController extends Controller
{
    public function permohonan()
    {
        return view('undagi.permohonan');
    }

    public function storepermohonan(Request $request)
    {
        //validasi
        $validator = Validator::make($request->all(), Permohonan::$rules);

        if ($validator->fails()) {
            return redirect('undagi/permohonan')
                        ->withErrors($validator)
                        ->withInput();
        }

        $userlogin = Auth::user();

        $mohon = new Permohonan();
        $mohon->alamat_rumah = $request->alamat_rumah;
        $mohon->telp = $request->telp;
        $mohon->lokasi_bangunan = $request->lokasi_bangunan;
        $mohon->no_ajb = $request->no_ajb;

        $tgl = Carbon::parse($request->tgl_ajb);
        $mohon->tgl_ajb = $tgl;
        
        $mohon->an_ajb = $request->an_ajb;
        $mohon->letak_ajb = $request->letak_ajb;
        $mohon->luas_ajb = $request->luas_ajb;

        $mohon->pemohon()->associate($userlogin);
        $mohon->save();


        if ($request->file('doc_ktp')->isValid()) {
		    $ktp = $mohon->id_permohonan . '.' . $request->file('doc_ktp')->getClientOriginalExtension();

		    $request->file('doc_ktp')->move(
		        public_path().'/permohonanundagi/ktp/', $ktp
		    );

		    $mohon->doc_ktp = $ktp;
		    $mohon->save();
		}

		if ($request->file('doc_itr')->isValid()) {
		    $itr = $mohon->id_permohonan . '.' . $request->file('doc_itr')->getClientOriginalExtension();

		    $request->file('doc_itr')->move(
		        public_path().'/permohonanundagi/itr/', $itr
		    );

		    $mohon->doc_itr = $itr;
		    $mohon->save();
		}

		if ($request->file('doc_shm')->isValid()) {
		    $shm = $mohon->id_permohonan . '.' . $request->file('doc_shm')->getClientOriginalExtension();

		    $request->file('doc_shm')->move(
		        public_path().'/permohonanundagi/shm/', $shm
		    );

		    $mohon->doc_shm = $shm;
		    $mohon->save();
		}

		if ($request->hasFile('doc_kuasa')) {
		    if ($request->file('doc_kuasa')->isValid()) {
			    $kuasa = $mohon->id_permohonan . '.' . $request->file('doc_kuasa')->getClientOriginalExtension();

			    $request->file('doc_kuasa')->move(
			        public_path().'/permohonanundagi/kuasa/', $kuasa
			    );

			    $mohon->doc_kuasa = $kuasa;
		    	$mohon->save();
			}
		}

		Mail::to($mohon->pemohon->email)->send(new TiketPermohonanUndagi($mohon));

		Session::flash('msgsave', 'Pendaftaran permohonan berhasil');
        return redirect('undagi');
    }
}
