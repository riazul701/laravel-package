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

Route::get('addWatermark', function()
{
    $img = Image::make(public_path('images/main.png'));

    /* insert watermark at bottom-right corner with 10px offset */
    $img->insert(public_path('images/logo.png'), 'bottom-right', 10, 10);

    $img->save(public_path('images/main-new.png'));

    dd('saved image successfully.');
});
