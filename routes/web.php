<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\DarahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;


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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('vaksin.index');
    })->name('HOME');    
    Route::resource('/vaksin', VaksinController::class);
    Route::resource('/darah', 'DarahController');
    Route::resource('/pegawai', PegawaiController::class);
});

Auth::routes();
