<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;


Route::get('/',[ContactController::class,'index']);
// Route::get('/confirm',[ContactController::class,'confirm']);
// Route::get('/thanks',[ContactController::class,'thanks']);
Route::get('/admin',[ContactController::class,'admin']);
Route::get('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'login']);
//お問い合わせ登録確認確認
Route::post('/confirm', [ContactController::class, 'confirm']);
//お問い合わせ登録
Route::post('/create', [ContactController::class, 'store']);
//お問い合わせ一覧
Route::post('/admin', [ContactController::class, 'admin']);


