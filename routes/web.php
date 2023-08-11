<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/create/{produk?}', [ProdukController::class, 'store']);
Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
//Route::get('/nama', function(){
    //echo 'Taufiq Sanjaya';
    //return view('nama');
//});

//Route::get('/kelas', function(){
    //echo 'TPEC-3';
    //return view('kelas');
//});

//Route::get('/teman', function(){
    //echo 'Megawati';
    //return view('teman');
//});