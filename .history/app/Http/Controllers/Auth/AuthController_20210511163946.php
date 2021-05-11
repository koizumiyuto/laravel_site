<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request\LoginFormRequest;
use App\Http\Requests

class AuthController extends Controller
{
    /*
    *@return View
    */
    public function showLogin()
    {
        return view('login\login_form');
    }

    public function login()
    {

    }
}
