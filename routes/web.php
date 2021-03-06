<?php

use App\Http\Controllers\Praktikum2Controller;
use App\Http\Controllers\UserController;
use Database\Factories\Praktikum2Factory;
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

Route::get('/', [Praktikum2Controller::class, 'index']);
//route view
Route::view('/about','about');
Route::view('/cart','cart');
Route::view('/checkout','checkout');
Route::view('/contact-us','contact-us');
Route::view('/gallery','gallery');
Route::view('/my-account','my-account');
Route::view('/shop-detail','shop-detail');
Route::view('/shop','shop');
Route::view('/wishlist','wishlist');

