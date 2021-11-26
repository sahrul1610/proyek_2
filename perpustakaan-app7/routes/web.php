<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('v_home');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/post_login', [LoginController::class, 'post_login']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('admin');

Route::get('/', [HomeController::class, 'index'])->middleware('admin');
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');//->middleware('admin');
Route::get('/anggota/add', [AnggotaController::class, 'add']);//->middleware('admin');
Route::post('/anggota/insert', [AnggotaController::class, 'insert']);//- >middleware('admin');
Route::get('/anggota/edit/{id_anggota}', [AnggotaController::class, 'edit']);//->middleware('admin');
Route::post('/anggota/update/{id_anggota}', [AnggotaController::class, 'update']);//->middleware('admin');
Route::get('/anggota/delete/{id_anggota}', [AnggotaController::class, 'delete']);//->middleware('admin');
// Route::get('/anggota/detail/', function() {
//     echo "hay";
// })->middleware('admin');
Route::get('/anggota/detail/{id_anggota}', [AnggotaController::class, 'detail']);
Route::get('/buku', [BukuController::class, 'index'])->name('buku');//->middleware('admin');
Route::get('/buku/add', [BukuController::class, 'add']);//->middleware('admin');
Route::get('/buku/edit/{id_buku}', [BukuController::class, 'edit']);//->middleware('admin');
Route::post('/buku/update', [BukuController::class, 'update']);//->middleware('admin');
Route::post('/buku/insert', [BukuController::class, 'insert']);//->middleware('admin');
Route::get('/buku/detail/{id_buku}', [BukuController::class, 'detail']);//->middleware('admin');
Route::get('/buku/hapus/{id_buku}', [BukuController::class, 'hapus']);//->middleware('admin');

Route::get('/petugas', [USerController::class, 'index'])->name('petugas')->middleware('admin');
Route::get('/petugas/add', [UserController::class, 'add'])->middleware('admin');
Route::post('/petugas/insert', [UserController::class, 'insert'])->middleware('admin');
Route::get('/petugas/edit/{id}', [UserController::class, 'edit'])->middleware('admin');
Route::post('/petugas/update/{id}', [UserController::class, 'update'])->middleware('admin');
Route::get('/petugas/delete/{id}', [UserController::class, 'delete'])->middleware('admin');

// Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas');//->middleware('admin');
// Route::get('/petugas/add', [PetugasController::class, 'add']);//->middleware('admin');
// Route::post('/petugas/insert', [PetugasController::class, 'insert']);//->middleware('admin');
// Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit']);//->middleware('admin');
// Route::post('/petugas/update/{id}', [PetugasController::class, 'update']);//->middleware('admin');
// Route::get('/petugas/delete/{id}', [PetugasController::class, 'delete']);//->middleware('admin');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');//->middleware('admin');
Route::post('/kategori/insert', [KategoriController::class, 'insert']);//->middleware('admin');
Route::get('/kategori/edit/{id_kategori}', [KategoriController::class, 'edit']);//->middleware('admin');
Route::post('/kategori/update', [KategoriController::class, 'update']);//->middleware('admin');
Route::post('/kategori/hapus', [KategoriController::class, 'hapus']);//->middleware('admin');


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');//->middleware('admin');
/*
Route::group(["middleware" => "admin"], function() {
    Route::prefix("/kategori")->group(function() {
        Route::get("/", [KategoriController::class, 'index']);
        Route::post("/add", [KategoriController::class, 'add']);
    });
});
*/
Route::get("/transaksi/form_peminjaman", [TransaksiController::class, "form_peminjaman"]);
Route::post("/transaksi/simpan_peminjaman", [TransaksiController::class, "simpan_peminjaman"]);

Route::get("/transaksi/form_pengembalian/", [TransaksiController::class, "form_pengembalian"]);

Route::prefix("/role")->group(function() {
    Route::get("/", [RoleController::class, 'index'])->name('role');
    Route::get("/add", [RoleController::class, 'add']);
    Route::post("/insert", [RoleController::class, 'insert']);
    Route::post("/update", [RoleController::class, 'update']);
    Route::get("/edit/{id}", [RoleController::class, 'edit']);
    Route::get("/hapus/{id}", [RoleController::class, 'hapus']);
});

//Route::view('/anggota', 'v_anggota');
//Route::view('/buku', 'v_buku');
//Route::view('/petugas', 'v_petugas');
