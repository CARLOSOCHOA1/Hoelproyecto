<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BedroomController;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Booking', function () {
    return view('Booking');
})->name('Booking');

Route::get('/Reserve', function () {
    return view('Reserve');
})->name('Reserve');

Route::get('/FAQ', function () {
    return view('FAQ');
})->name('FAQ');


Route::resource('bedrooms', App\Http\Controllers\BedroomController::class);
Auth::routes();


