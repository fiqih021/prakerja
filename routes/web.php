<?php

use App\Http\Controllers\Admin\ArtikelController as artikel;
use App\Http\Controllers\User\HomeController as user;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tamu\TamuController as tamu;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('artikel', artikel::class);
Route::resource('user', user::class);
Route::resource('tamu', tamu::class);
