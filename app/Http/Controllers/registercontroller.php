<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;

class registercontroller extends Controller
{
    function register() {
        $title = "Register";
        return view('register', [
            "title" => $title
        ]);
    }

    function proses_tambah_petugas(Request $request) {
            DB::table('user')->insert([
                'username' => $request->username,
                'email' => $request->email,
                'namalengkap' => $request->namalengkap,
                'password' => Hash::make($request->password),
            ]);
            return redirect('/login');
        }
}