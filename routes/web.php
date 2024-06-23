<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllers;
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
