<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;

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

Route::controller(ViewController::class)->group(function(){
  //トップページ
  Route::get('/', 'home')->name('home');
  //職種詳細
  Route::get('/detail/{id}', 'detail')->name('detail');
  //エントリーフォーム
  Route::get('/form', 'form')->name('form');
  //ログイン画面
  Route::get('/csadmin', 'login')->name('login');
});

Route::controller(AdminController::class)->prefix('admin')->group(function(){
  /*-------------------------------------
  管理者のみアクセス可能
  -------------------------------------*/
  Route::get('/list', 'list')->name('list');
});