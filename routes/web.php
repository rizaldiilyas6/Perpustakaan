<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\loginpetugascontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\tambahbukucontroller;
use App\Http\Controllers\tambahkategoribukucontroller;
use App\Http\Controllers\tambahkategoricontroller;
use App\Http\Controllers\datakategoribukucontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [loginController::class, "login"])->name('login');
// Route::get('/login', [loginController::class, "login"]);
Route::post('/login', [loginController::class, "proses_login"]);

Route::get('/loginpetugas', [loginpetugascontroller::class, "login"])->name('login');
// Route::get('/login', [loginController::class, "login"]);
Route::post('/loginpetugas', [loginpetugascontroller::class, "proses_login"]);

Route::get('/register', [registercontroller::class, "register"]);
// Route::post('/register', [registerContrloginller::class, "proses_tambah_masyarakat"]);
Route::post('/register', [registercontroller::class, "proses_tambah_petugas"]);
// Route::get('/adminPage', [adminPageController::class, "allData"]);
// Route::get('/register', [AuthController::class, 'register']);
// Route::post('/register', [AuthController::class, 'store']);

Route::get('/tambahbuku', [tambahbukucontroller::class, "tambahbuku"]);
Route::post('/tambahbuku', [tambahbukucontroller::class, "proses_tambah_buku"]);

Route::get('/tambahkategoribuku', [tambahkategoribukucontroller::class, "tambahkategoribuku"]);
Route::post('/tambahkategoribuku', [tambahkategoribukucontroller::class, "proses_tambah_kategori_buku"]);

Route::get('/tambahkategori', [tambahkategoricontroller::class, "tambahkategori"]);
Route::post('/tambahkategori', [tambahkategoricontroller::class, "proses_tambah_kategori"]);

Route::get('/datakategoribuku', [datakategoribukucontroller::class, "tampilData"]);
Route::post('/datakategoribuku', [datakategoribukucontroller::class, "proses_data_kategori_buku"]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/petugas', function(){
    return view('/petugas');
});