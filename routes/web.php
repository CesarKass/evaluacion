<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('home');
});

Auth::routes();

Route::resource('tblgrupossistemas', App\Http\Controllers\TblgrupossistemaController::class)->middleware('auth');
Route::resource('tblconfiguracioncargas', App\Http\Controllers\TblconfiguracioncargaController::class)->middleware('auth');
Route::resource('tblsolicitudes', App\Http\Controllers\TblsolicitudeController::class)->middleware('auth');
Route::resource('tblbitacoras', App\Http\Controllers\TblbitacoraController::class)->middleware('auth');
Route::resource('tblcontrolcargas', App\Http\Controllers\TblcontrolcargaController::class)->middleware('auth');
Route::get('/cancelSoli/{id}', [App\Http\Controllers\TblsolicitudeController::class, 'cancelSoli'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
