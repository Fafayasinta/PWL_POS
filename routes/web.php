<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// level
Route::get('/level', [LevelController::class, 'index']);
// kategori
Route::get('/kategori', [KategoriController::class, 'index']);
//user
Route::get('/user', [UserController::class, 'index']);

//tambah
Route::get('/user/tambah', [UserController::class, 'tambah']);
//tambah_simpan
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

//ubah
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
//ubah_simpan
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
//delete
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

// Jobsheet 5 - prak 2
Route::get('/', [WelcomeController::class,'index']);

// index
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'index']);         // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);     // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class,'create']);   // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);        // menyimpan data user baru
    Route::get('/{id}', [UserController::class,'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class,'edit']);  // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);    // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);  // menghapus data user
});