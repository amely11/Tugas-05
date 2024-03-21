<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/userbook', function () {
    return view('userbook');
});

