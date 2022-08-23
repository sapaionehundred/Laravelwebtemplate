<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //Add คอนโทลเข้ามาก่อน

Route::get('/', [HomeController::class,'home']);
Route::get('about', [HomeController::class,'about']);
Route::get('service', [HomeController::class,'service']);
Route::get('contact', [HomeController::class,'contact']);
Route::get('login', [HomeController::class,'login']);

Route::get('product', function(){
    return "Product Page";
});