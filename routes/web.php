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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('User')->name('user')->group(function(){
    Route::get('/curriculum_list',[App\Http\controllers\User\CurriculumController::class,'showCurriculumList'])->name('show.curriculum');
});

Route::namespace('Admin')->name('admin')->group(function(){
    Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('show.login');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('show.top');
    Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('show.login');
    //Route::get('/register', [App\Http\Controllers\Admin\RegisterController::class, 'showRegisterForm'])->name('show.register');
    //Route::post
    
    //Route::get('/top', [App\Http\Controllers\Admin\TopController::class, 'showTop'])->name('show.top');
    
    //Route::get('/banner_edit', [App\Http\Controllers\Admin\BannerController::class, 'showBannerEdit'])->name('show.banner.edit'); 
    //Route::post
});


