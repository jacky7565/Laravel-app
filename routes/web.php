<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Psy\TabCompletion\AutoCompleter;

// Route::get('/', function () {
//     return view('create');
// });


Route::get('/create',[ContactController::class,'create']);
Route::Post('/add',[ContactController::class,'add']);
Route::get('/',[ContactController::class,'index'])->middleware('auth.check');

Route::get('/edit/{id}',[ContactController::class,'fetch']);
Route::put('/update/{id}',[ContactController::class,'edit']);
Route::delete('/delete/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
Route::get('/login',[AuthController::class,'login']);
Route::post('/auth',[AuthController::class,'checkAuth']);
Route::get('/logout',[AuthController::class,'logOut']);

Route::get('products-list',function(){
    return view('productList');
});