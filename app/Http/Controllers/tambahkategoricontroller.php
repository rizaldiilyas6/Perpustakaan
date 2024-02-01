<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class tambahkategoricontroller extends Controller
{
    function tambahkategori() {
        $title = "Tambah Kategori";
        return view('tambahkategori', [
            "title" => $title
        ]);
}
function proses_tambah_kategori(Request $request) {
    
}
}