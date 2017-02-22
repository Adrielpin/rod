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
    return view('web.home');
})->name('home');

Route::get('/galeria', function () {
    return view('web.galeria');
})->name('galeria');

Route::get('/contato', function () {
    return view('web.contato');
})->name('contato');

Auth::routes();
