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

Route::namespace('User')->name('user.')->group(function(){
    //ログイン画面
    Route::get('/user/login',[App\Http\Controllers\User\Auth\LoginController::class,'showloginForm'])->name('show.login');
    Route::post('/user/login', [App\Http\Controllers\User\Auth\LoginController::class, 'login'])->name('user.login.login');
    Route::post('user/logout', [App\Http\Controllers\User\Auth\LoginController::class,'logout'])->name('user.login.logout');
    //トップページ
    Route::get('/user/top', [App\Http\Controllers\User\TopController::class, 'showTop'])->middleware('auth:user')->name('show.top');
    
    //授業一覧画面
    Route::get('/user/curriculum_list',[App\Http\controllers\User\CurriculumController::class,'showCurriculumList'])->middleware('auth:user')->name('show.curriculum');
    Route::get('/user/curriculum_scope',[App\Http\controllers\User\CurriculumController::class,'curriculum_scope'])->name('curriculum_scope');
});

Route::namespace('Admin')->name('admin.')->group(function(){
    //Auth::routes();
    
    //ログイン画面
    Route::get('/admin/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('show.login');
    Route::post('/admin/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login.login');
    Route::post('admin/logout', [App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('admin.login.logout');
    
    //管理ユーザー登録画面
    Route::get('/admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'showRegisterForm'])->name('show.register');
    Route::post('/admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'register']);
    //トップページ
    Route::get('/admin/top', [App\Http\Controllers\Admin\TopController::class, 'showTop'])->middleware('auth:admin')->name('show.top');
    //お知らせ一覧
    Route::get('/admin/article_list', [App\Http\Controllers\Admin\ArticleController::class, 'showArticleList'])->middleware('auth:admin')->name('show.article.list'); 
    //バナー管理
    Route::get('/admin/banner_edit', [App\Http\Controllers\Admin\BannerController::class, 'showBannerEdit'])->name('show.banner.edit'); 
    Route::post('/admin/destroy/{id}',[App\Http\Controllers\Admin\BannerController::class, 'destroy'])->name('destroy');
    Route::post('/admin/create',[App\Http\Controllers\Admin\BannerController::class, 'create'])->name('create');
    
    //授業一覧
    Route::get('/admin/curriculum_list', [App\Http\Controllers\Admin\CurriculumController::class, 'showCurriculumList'])->middleware('auth:admin')->name('show.curriculum.list'); 
});




