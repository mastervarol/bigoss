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
    }
}
