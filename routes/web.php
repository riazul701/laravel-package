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

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-curl', 'HomeController@getCURL');
Route::get('get-post-curl', 'HomeController@getPostCURL');
Route::get('get-patch-curl', 'HomeController@getPatchCURL');
Route::get('get-delete-curl', 'HomeController@getDeleteCURL');
