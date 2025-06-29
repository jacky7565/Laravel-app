<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;

// Route::get('/', function () {
//     return view('create');
// });


Route::get('/create',[ContactController::class,'create']);
Route::Post('/add',[ContactController::class,'add']);
Route::get('/',[ContactController::class,'index']);
Route::get('/edit/{id}',[ContactController::class,'fetch']);
Route::put('/update/{id}',[ContactController::class,'edit']);
Route::delete('/delete/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
Route::post('login',[AuthController::class,'login']);