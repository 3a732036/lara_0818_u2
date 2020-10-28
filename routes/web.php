<?php

use App\Http\Controllers\HomeController;

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

// 練習 1-2 設定從 /routes/web.php回傳 index.blade.php
/*
 * Route::get('home', function (){
    return view('home');
});
*/

// 練習 1-6 修改 Route載入的頁面路徑
/*
Route::get('home', function (){
    return view('home.index');
});
*/
//練習 1-8 改用 HomeController回傳
Route::get('/',[HomeController::class,'index']);

