<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class StaffAuthController extends Controller
{
    public function v_signin()
    {
        return view('auth/signin');
    }
}
