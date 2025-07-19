<?php

use App\Http\Controllers\Api\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Api\ProductController;


Route::middleware('auth:sanctum')->group(function(){
Route::apiResource('product',ProductController::class);

});
Route::post('/auth',[ApiAuthController::class,'index']);
