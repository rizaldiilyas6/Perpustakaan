<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class tambahbukucontroller extends Controller
{
    function tambahbuku() {
        $title = "Tambah Buku";
        return view('tambahbuku', [
            "title" => $title
        ]);
}
function proses_tambah_kategori_buku(Request $request) {
    
}
}