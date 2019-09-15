<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function summarykepemilikan()
    {
        return view('admin.master.kepemilikan.kepemilikan', 
        [
            'sidemenuActive' => 'master',
            'sidemenuSubActive' => 'kepemilikan',
        ]);
    }
    //

    public function summarykecamatan()
    {
        return view('admin.master.kecamatan.kecamatan', 
        [
            'sidemenuActive' => 'master',
            'sidemenuSubActive' => 'kecamatan',
        ]);
    }

    public function summarykelurahan()
    {
        return view('admin.master.kelurahan.kelurahan', 
        [
            'sidemenuActive' => 'master',
            'sidemenuSubActive' => 'kelurahan',
        ]);
    }

    public function summarykategori()
    {
        return view('admin.master.kategori.kategori', 
        [
            'sidemenuActive' => 'master',
            'sidemenuSubActive' => 'kategori',
        ]);
    }

    public function summarypotensi()
    {
        return view('admin.master.potensi.potensi', 
        [
            'sidemenuActive' => 'master',
            'sidemenuSubActive' => 'potensi',
        ]);
    }
}
