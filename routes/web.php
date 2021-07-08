<?php

use Illuminate\Support\Facades\Route;

//custom
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']); 
Route::get('/details/{id}',[ProductController::class,'details']); 
Route::post('/search',[ProductController::class,'search']); 
Route::get('/search', function() {
    return redirect('/');
});
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/logout',[ProductController::class,'logout']);
Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('/removecart/{id}',[ProductController::class,'removeCart']);