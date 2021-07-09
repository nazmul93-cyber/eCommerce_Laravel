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

// registration - login
Route::get('/register', function () {
    return view('register');
});
Route::post('/register',[UserController::class,'register']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'login']);





// home - details - logout
Route::get('/',[ProductController::class,'index']); 
Route::get('/details/{id}',[ProductController::class,'details']); 
Route::get('/logout',[ProductController::class,'logout']);




// serach
Route::post('/search',[ProductController::class,'search']); 
Route::get('/search', function() {
    return redirect('/');
});



// cart
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('/removecart/{id}',[ProductController::class,'removeCart']);



// order
Route::get('/ordernow',[ProductController::class,'orderNow']);
Route::post('/orderplace',[ProductController::class,'orderPlace']);
Route::get('/myorders',[ProductController::class,'myOrders']);