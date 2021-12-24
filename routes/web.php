<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CalenderPendudukController;
use App\Http\Controllers\CalenderAdminController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\DetailKkController;


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

Auth::routes();

// Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Penduduk
Route::resource('penduduk', PendudukController::class);

// Profil
Route::get('/profil',[ProfilController::class, 'index'])->name('profil');

// Kartu Keluarga
Route::resource('kartuKeluargas',KartuKeluargaController::class);

// Detail KK
Route::resource('detailKks',DetailKkController::class);
Route::resource('users', UserController::class);

// Kelahiran
Route::resource('kelahirans',KelahiranController::class);
Route::get('/kelahirans/{id}/report', [KelahiranController::class, 'report']);

// Kematian
Route::resource('kematians',KematianController::class);
Route::get('/kematians/{id}/report', [KematianController::class, 'report']);

// Calender
Route::get('/calenderAdmin', function () {
    return view('users.calenderAdmin');
});
Route::get('/calenderPenduduk', function () {
    return view('penduduk.calenderPenduduk');
});