<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class,'index']);

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index']);
    Route::get('login',[LoginController::class,'index']);
    Route::post('login',[LoginController::class,'login']);
    Route::get('logout',[LoginController::class,'logout']);
    Route::post('store',[AdminController::class,'store']);
    Route::get('add/banner/{id}',[AdminController::class,'storeBanner']);
    Route::get('delete/movie/{id}',[AdminController::class,'deleteMovie']);
    Route::get('delete/banner/{id}',[AdminController::class,'deleteBanner']);
});

Route::get('request',function(){
    return view('request');
});

Route::prefix('overview')->group(function(){
    Route::get('/{slug}',[MainController::class,'overview']);
    Route::get('watch/{slug}',[MainController::class,'watch']);
    Route::get('download/{slug}',[MainController::class,'download']);
});