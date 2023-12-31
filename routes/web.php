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
    return view('/waitingg');
})->name('waitingg');

Route::get('/acceuil', function () {
    return view('/pages/acceuil');
})->name('acceuil');

Route::get('/article', function () {
    return view('/pages/article');
})->name('article');

Route::get('/celebration', function () {
    return view('/pages/articles/celebration');
})->name('celebration');
