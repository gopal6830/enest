<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/login', function () {
    return view('login');
});Route::get('/signup', function () {
    return view('signup');
});
Route::get('/mycart', function () {
    return view('mycart');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/newcategory','App\Http\Controllers\IController@newcategory');
Route::post('/newcategory','App\Http\Controllers\IController@add_category_form');
Route::get('/add_product','App\Http\Controllers\IController@add_product');
Route::post('/add_product','App\Http\Controllers\IController@add_product_form');
Route::get('/cartdisplay/{id}','App\Http\Controllers\IController@cartdisplay');
Route::post('/cart','App\Http\Controllers\IController@cart');
Route::get('/mycart','App\Http\Controllers\IController@mycart');
Route::get('/home','App\Http\Controllers\IController@home');
Route::get('/all_products','App\Http\Controllers\IController@all_product');
Route::get('/findid/{id}','App\Http\Controllers\IController@findid');
Route::post('/login','App\Http\Controllers\IController@login');
Route::post('/signup','App\Http\Controllers\IController@signup');
Route::post('searchcat','App\Http\Controllers\IController@searchcat');
