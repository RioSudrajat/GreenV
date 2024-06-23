<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/education', function () {
    return view('education');
});
Route::get('/laporan', function () {
    return view('laporan');
});
Route::group(['prefix' => '/auth', "as" => "auth."], function () {
    Route::get('/login', [AuthControllers::class, 'LoginPage'])->name("login");
    Route::post('/login', [AuthControllers::class, 'login'])->name("login.proses");
    Route::get('/register', [AuthControllers::class, 'RegisterPage'])->name('register');
    Route::post('/register', [AuthControllers::class, 'register'])->name("register.proses");
});
Route::post('logout', [AuthControllers::class, 'logout'])->name('logout');

Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');

// artikel

Route::get('/artikel/artikel1', [ArtikelController::class, 'showArtikel1'])->name('artikel1');
Route::get('/artikel/artikel2', [ArtikelController::class, 'showArtikel2'])->name('artikel2');
Route::get('/artikel/artikel3',[ArtikelController::class, 'showArtikel3'])->name('artikel3');
Route::get('/artikel/artikel4',[ArtikelController::class, 'showArtikel4'])->name('artikel4');
Route::get('/artikel/artikel5',[ArtikelController::class, 'showArtikel5'])->name('artikel5');
Route::get('/artikel/artikel6',[ArtikelController::class, 'showArtikel6'])->name('artikel6');