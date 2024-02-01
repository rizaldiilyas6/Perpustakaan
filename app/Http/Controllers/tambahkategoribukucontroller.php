<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class tambahkategoribukucontroller extends Controller
{
    function tambahkategoribuku() {
        $title = "Tambah Kategori Buku";
        return view('tambahkategoribuku', [
            "title" => $title
        ]);
}
function proses_tambah_kategori_buku(Request $request) {
    DB::table('petugas')->insert([
        'Tambah_Kategori_buku' => $request->Tambah_Kategori_buku,
    ]);
    DB::table('pengaduan')->insert([
        'kategoriid' => date('Y-m-d'),
        'nmaakategori' => Auth::user()->namakategori,
    ]);
    return redirect('/detailLaporan');
}
}