<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckLogin;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    function login(Request $request)
    {
        if ($request->username == 'hoang@gmail.com'
            && $request->password == '123456') {
            return view('index');
        } else {
            return redirect('login');
        }
    }
}
