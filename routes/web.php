<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;

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

Route::resource('/login', LoginController::class)->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth', 'role:guru']], function(){
    Route::resource('/guru', GuruController::class);
});

Route::group(['middleware' => ['auth', 'role:siswa']], function(){
    Route::resource('/siswa', SiswaController::class);
});
