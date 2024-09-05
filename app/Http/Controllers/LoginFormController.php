<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFormController extends Controller
{
    public function loginForm(Request $request)
    {
        return view('login')->with('success', 'logged in!');
    }
}
