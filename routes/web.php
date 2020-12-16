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
    return view('welcome');
});

Route::get('reservaciones/create','App\Http\Controllers\ReservacionController@create')->name('reservaciones.create')->middleware('auth');

Route::post('reservaciones','App\Http\Controllers\ReservacionController@store')->name('reservaciones.store');

Route::get('reservaciones/{id}','App\Http\Controllers\ReservacionController@show')->name('reservaciones.show');

Route::get('Principal','App\Http\Controllers\ReservacionController@Principal')->name('Principal.Principal');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
