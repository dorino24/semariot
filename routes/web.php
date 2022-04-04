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
    return view('index');
});
Route::get('/past-event', function () {
    return view('pastevent');
});
Route::get('/about-uns', function () {
    return view('aboutuns');
});
Route::get('/register', function () {
    return view('register');
});