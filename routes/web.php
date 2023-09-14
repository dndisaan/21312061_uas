<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;

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

Route::resource('uas', UasController::class);

/// Route untuk menampilkan form edit
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');

// Route untuk menghapus data mahasiswa
Route::delete('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus');

