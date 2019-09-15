<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ObjekWisataController extends Controller
{
    public function summaryobjekwisata()
    {
        return view('admin.objekwisata.objekwisata', 
        [
            'sidemenuActive' => 'objekwisata',
            'sidemenuSubActive' => '',
        ]);
    }
}
