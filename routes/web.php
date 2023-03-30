<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;

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

Route::get('/', function () {
    return view('kategoris.home');
});

Route::get('/login', function () {
    return view('/login', ["title"=>"Login"]);
});

Route::get('/home', function () {
    return view('/home', ["title"=>"Home"]);
});

//tampil data kategori
Route::get('/kategoris/kategori', [KategoriController::class,'index']);
Route::get('/kategoris/add', [KategoriController::class,'create']);
Route::get('/kategoris/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::get('/kategoris/kategori/{id}/delete', [KategoriController::class, 'destroy']);
Route::post('/kategoris/kategori', [KategoriController::class, 'store']);
Route::put('/kategoris/kategori/{id}',[KategoriController::class, 'update']);

//tampil data produk
Route::get('/product/produk', [ProdukController::class, 'index']);
Route::get('/product/add', [ProdukController::class,'create']);
Route::get('/product/produk/{id}/edit', [ProdukController::class, 'edit']);
Route::get('/product/produk/{id}/delete', [ProdukController::class, 'destroy']);

Route::post('/product/produk', [ProdukController::class, 'store']);

Route::put('/product/produk/{id}',[ProdukController::class, 'update']);

Route::fallback(function () {
    return '404 | Halaman  tidak tersedia';
});

//keranjang
Route::resource('keranjang',KeranjangController::class);
Route::get('/product/produk/{id}/delete', [KeranjangController::class, 'destroy']);
