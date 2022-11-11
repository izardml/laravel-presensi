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
    // return view('welcome');
    // if(['middleware' => ['auth']]){
    //     if (auth()->user()->role == "guru"){
    //         return redirect('guru.index');
    //     }elseif (auth()->user()->role == "siswa") {
    //         return redirect('siswa.index');
    //     }
    // }else {
    //     return redirect('login.index');
    // }
    return redirect()->route('login.index');
});

Route::resource('/login', LoginController::class)->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth', 'role:guru']], function(){
    Route::resource('/guru', GuruController::class);
    Route::get('/guru/{guru}/delete', [GuruController::class, 'destroy']);
});

Route::group(['middleware' => ['auth', 'role:siswa']], function(){
    Route::resource('/siswa', SiswaController::class);
});
