<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaffAuthController extends Controller
{
    public function v_signin()
    {
        return view('auth/signin');
    }

    public function v_signup()
    {
        return view('auth/signup');
    }

    public function v_reset()
    {
        return view('auth/reset');
    }
}
