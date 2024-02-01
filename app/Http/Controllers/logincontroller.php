<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class loginController extends Controller
{
    function login() {
        // return hash::make('jawir');
        return view('login');
        
    }

    function proses_login(Request $request) {
        $data_login = $request->only('username', 'password');
        $masuk = auth::attempt($data_login);

        if($masuk){
            return redirect('/tambahbuku');
        }else{
            return redirect('/login')->with("error", "username atau password salah");
        }
    }

    function logout(){
        auth::logout();
        return redirect('/login');
    }
}                     