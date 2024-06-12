<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('User')->name('user')->group(function(){
    Route::get('/curriculum_list',[App\Http\controllers\User\CurriculumController::class,'showCurriculumList'])->name('show.curriculum');
});

Route::namespace('Admin')->name('admin')->group(function(){
    //Auth::routes();
    
    //ログイン画面
    Route::get('/admin/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('show.login');
    Route::post('/admin/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login.login');
    Route::post('admin/logout', [App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('admin.login.logout');
    
    //管理ユーザー登録画面
    Route::get('/admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'showRegisterForm'])->name('show.register');
    Route::post('/admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'register']);
    
    Route::get('/admin/top', [App\Http\Controllers\Admin\TopController::class, 'showTop'])->middleware('auth:admin')->name('show.top');
    
    
    
    Route::get('/admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'showRegisterForm'])->name('show.register');
    //Route::post('/admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'register']);//->name('show.register');
    
    
    //Route::get('/banner_edit', [App\Http\Controllers\Admin\BannerController::class, 'showBannerEdit'])->name('show.banner.edit'); 
    //Route::post
});




