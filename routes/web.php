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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'showRegisterForm'])->name('show.register');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('show.login');
Route::get('/delivery/{id}', [App\Http\Controllers\DeliveryController::class, 'showDelivery'])->name('show.delivery');
Route::get('/top', [App\Http\Controllers\TopController::class, 'showTop'])->name('show.top');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', 'User\ArticleController');


//admin用  登録・ログイン・ホーム
// Route::namespace('Admin')->name('admin.')->group(function () {
Route::view('/admin/login', 'admin/login');
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class,'login']);
Route::post('admin/logout', [App\Http\Controllers\Admin\LoginController::class,'logout']);
Route::view('/admin/register', 'admin/register');
Route::post('/admin/register', [App\Http\Controllers\Admin\RegisterController::class, 'register']);
Route::view('/admin/home', 'admin/home')->middleware('auth:admin');

//admin用　パスワード再設定
Route::view('/admin/password/reset', 'admin/password/email');
Route::post('/admin/password/email', [App\Http\Controllers\Admin\ForgetPasswordController::class, 'sendResetLinkEmail']);
Route::view('/admin/password/reset/{token}', [App\Http\Controllers\Admin\ResetPasswordController::class, 'showResetForm']);
Route::post('/admin/password/reset', [App\Http\Controllers\Admin\ResetPasswordController::class, 'reset']);
// });