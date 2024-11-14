<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PersegiPanjangController;
use App\Http\Controllers\Api\PesanController;
use App\Http\Controllers\Api\DateTimeController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/films', [FilmController::class, 'apiIndex']);
Route::post('/menghitung-luas', [PersegiPanjangController::class, 'store']);
Route::post('/pesan', [PesanController::class, 'store']);
// Route::get('/tanggalwaktu-saatini', 'Api\DateTimeController@getCurrentDateTime');
Route::get('/current-datetime', [DateTimeController::class, 'getCurrentDateTime']);
