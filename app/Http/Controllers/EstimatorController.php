<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimatorController extends Controller
{
    public function estimator()
    {
        return view('estimator.input');
    }

    public function result(Request $request)
    {
    	return json_encode($request->all());
    	
        return view('estimator.result');
    }
}
