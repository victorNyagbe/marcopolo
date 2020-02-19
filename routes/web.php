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
    return view('visitors.home');
})->name('welcome');

Route::get('promotions/artistes', function () {
    return view('visitors.artiste');
})->name('promotions.artistes');

Route::get('promotions/djs', function () {
    return view('visitors.discJockeys');
})->name('promotions.discJockeys');

Route::get('miami228', function () {
    return view('visitors.miami');
})->name('miami228');

Route::get('galerie', function () {
    return view('visitors.galerie');
})->name('galerie');
