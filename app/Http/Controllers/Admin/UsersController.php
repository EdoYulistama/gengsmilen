<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function summaryusers()
    {
        return view('admin.users.users', 
        [
            'sidemenuActive' => 'users',
            'sidemenuSubActive' => '',
        ]);
    }
}
