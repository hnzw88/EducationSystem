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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'showRegisterForm'])->name('show.register');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('show.login');
Route::get('/delivery/{id}', [App\Http\Controllers\DeliveryController::class, 'showDelivery'])->name('show.delivery');
Route::get('/top', [App\Http\Controllers\TopController::class, 'showTop'])->name('show.top');