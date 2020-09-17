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
    return view('home.home');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/how-does-this-work', function () {
    return view('home.how-does-this-work');
});

Route::get('/why-do-we-do-this', function () {
    return view('home.why-do-we-do-this');
});

Route::get('/other-christmas-fun', function () {
    return view('home.other-christmas-fun');
});

Route::get('/send-us-an-email', function () {
    return view('home.send-us-an-email');
});