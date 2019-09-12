<?php

namespace App\Http\Controllers\Wisata;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    return view('wisata.dashboard', [
        'sidemenuActive' => 'dashboard',
        'sidemenuSubActive' => '',

    ]);
}
}
