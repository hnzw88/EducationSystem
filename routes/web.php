<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\TopController;

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

Route::get('/user/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/register', [App\Http\Controllers\User\Auth\RegisterController::class, 'showRegisterForm'])->name('show.register');
Route::get('/user/login', [App\Http\Controllers\User\Auth\LoginController::class, 'showLoginForm'])->name('show.login');
Route::get('/user/delivery/{id}', [App\Http\Controllers\DeliveryController::class, 'showDelivery'])->name('show.delivery');
Route::get('/user/top', [App\Http\Controllers\TopController::class, 'showTop'])->name('show.top');

Route::view('/user/home','/user/home');
Route::view('/user/login','/user/auth/login');
Route::post('/user/login',[App\Http\Controllers\User\Auth\LoginController::class,'login'])->name('user.login');
Route::post('/user/logout',[App\Http\Controllers\User\Auth\LoginController::class,'logout'])->name('user.logout');

Route::view('/user/register','user/auth/register');
Route::post('/user/register',[App\Http\Controllers\User\Auth\RegisterController::class,'register'])->name('user.register');