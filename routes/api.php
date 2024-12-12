<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\FoodbevController;
use App\Http\Controllers\Api\JadwalTayangController;
use App\Http\Controllers\Api\KursiController;
use App\Http\Controllers\Api\KursiPemesananTiketController;
use App\Http\Controllers\Api\PemesananTiketController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\StudioController;
use App\Http\Controllers\Api\TiketController;
use App\Http\Controllers\Api\AuthController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::resource('/customer', CustomerController::class);
Route::resource('/film', FilmController::class);
Route::resource('/foodbev', FoodbevController::class);
Route::resource('/jadwal-tayang', JadwalTayangController::class);
Route::resource('/kursi', KursiController::class);
Route::resource('/kursi-pemesanan-tiket', KursiPemesananTiketController::class);
Route::resource('/pemesanan', PemesananTiketController::class);
Route::resource('/review', ReviewController::class);
Route::resource('/studio', StudioController::class);
Route::resource('/tiket', TiketController::class);
