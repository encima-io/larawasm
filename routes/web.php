<?php

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
})->name('welcome');

Route::get('/hello-world', function () {
    return view('hello-world');
})->name('hello-world');

Route::get('/game-of-life', function () {
    return view('game-of-life');
})->name('game-of-life');
