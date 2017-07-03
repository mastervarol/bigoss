<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function indexantrian()
    {
        return view('antrian.dashboard');
    }

    public function indexsiaplapor()
    {
        return view('siaplapor.dashboard');
    }
}
