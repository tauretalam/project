<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'home']);
Route::get('/ProductDetails', [HomeController::class, 'ProductDetails']);



Route::get('About', [AboutController::class, 'About']);
Route::get('About/Contact', [AboutController::class, 'Contact']);
Route::get('About/Contact/Shop', [AboutController::class, 'Shop']);


Route::get('Login', [LoginController::class, 'Login']);
Route::get('Login/SignUp', [LoginController::class, 'SignUp']);
Route::get('Login/SignUp/Cart', [LoginController::class, 'Cart']);