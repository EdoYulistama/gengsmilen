<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function summarypengunjung()
    {
        return view('admin.pengunjung.pengunjung', 
        [
            'sidemenuActive' => 'pengunjung',
            'sidemenuSubActive' => '',
        ]);
    }
}
