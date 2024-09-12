<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\Auth\ConfirmPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CurriculumController;

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
Route::get('/top', [App\Http\Controllers\TopController::class, 'showTop'])->name('top')->middleware('auth');
Route::get('/article_list', [App\Http\Controllers\ArticleController::class, 'index'])->name('article_list');

Route::get('/curriculum_list/{id}', [CurriculumController::class, 'showCurriculumList'])->name('show.curriculum.list');
Route::get('/curriculum_edit/{id}', [CurriculumController::class, 'showCurriculumEdit'])->name('show.curriculum.edit');
Route::get('/delivery/{curriculums_id}', [CurriculumController::class, 'showDeliveryEdit'])->name('show.delivery.edit');



