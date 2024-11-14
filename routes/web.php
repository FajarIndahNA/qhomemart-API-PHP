<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PersegiPanjangController;
use App\Http\Controllers\Api\PesanController;
use App\Http\Controllers\SapaanController;




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

Route::get('/films', [FilmController::class, 'index']);
Route::get('/persegipanjang', [PersegiPanjangController::class, 'create']);
Route::get('/kirim-pesan', function () {
    return view('pesan.create');
});
// Route::post('/api/pesan', [MessageController::class, 'store']);

Route::get('/sapaan-form',  [SapaanController::class, 'showForm']); // Menampilkan form input nama
Route::post('/sapaan', [SapaanController::class, 'greetUser']); // API untuk menyapa berdasarkan nama yang dikirim via POST