<?php

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', 'PagesController@aboutUs');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@saveContact');

Route::get('/login', 'UserController@viewLogin');
Route::post('/welcome', 'UserController@welcome');