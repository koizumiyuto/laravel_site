<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    *@return View
    */
    public function showLogin()
    {
        return view('login\login_form');
    }

    /**
     * @param App\Http\Requests\LoginFormRequest 
     * @return
     * */
    public function login(LoginFormRequest $request)
    {
        dd($request->all());

    }
}
