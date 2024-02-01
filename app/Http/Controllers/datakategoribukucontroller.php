<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class datakategoribukucontroller extends Controller
{
    function tampilData() {
        $title = "Data Kategori Buku";

        // $datakategoribuku = Kategori Buku::all();


        return view('/datakategoribuku', [
            "title" => $title,
            // "datakategoribuku" => $datakategoribuku   
        ]);
    }
}

