<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginPetugasController extends Controller
{
    function login() {
        return view('/loginpetugas');
    }

    function proses_login(Request $request) {
        $data = $request->only('username', 'password');
        if (Auth::guard('petugas')->attempt($data)) {
            $user = Auth::guard('petugas')->user();
    
            // Check the level of the authenticated user
            if ($user->level === 'petugas') {
                return redirect('/detailLaporanPetugas');
            } elseif ($user->level === 'admin') {
                return redirect('/home');
            }
        }
        return redirect("/loginpetugas");
    }

    public function logout(){
        auth::guard('petugas')->logout();

        return redirect('/petugas/login');
    }
}