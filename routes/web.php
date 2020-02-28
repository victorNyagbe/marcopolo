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

/* Administrator */

Route::prefix('admin')->group(function() {

    Route::get('/', 'Admin\AdministratorController@welcome')->name('admin.welcome');

    Route::prefix('accueil')->group(function () {
       Route::get('profile', 'Admin\HomeController@profileIndex')->name('home.profile');
       Route::get('profile/{home}/edit', 'Admin\HomeController@profileEdit')->name('home.profileEdit');
       Route::patch('profile/{home}', 'Admin\HomeController@profileUpdate')->name('home.profileUpdate');
       Route::get('couverture', 'Admin\HomeController@couvertureIndex')->name('home.couverture');
       Route::get('couverture/{home}/edit', 'Admin\HomeController@couvertureEdit')->name('home.couvertureEdit');
       Route::patch('couverture/{home}', 'Admin\HomeController@couvertureUpdate')->name('home.couvertureUpdate');
       Route::get('image-accueil', 'Admin\HomeController@fadeIndex')->name('home.fade');
       Route::post('image-accueil', 'Admin\HomeController@fadeStore')->name('home.fadeStore');
       Route::get('image-accueil/{home}/edit', 'Admin\HomeController@fadeEdit')->name('home.fadeEdit');
    });
});


/* Visitors */


Route::get('/', 'Visitors\PagesController@home')->name('welcome');

Route::prefix('promotions')->group(function () {

    Route::get('artistes', 'Visitors\PagesController@artist')->name('promotions.artistes');

    Route::get('djs', 'Visitors\PagesController@dj')->name('promotions.discJockeys');

    Route::get('boissons', 'Visitors\PagesController@boisson')->name('promotions.boissons');
});

Route::get('miami228', 'Visitors\PagesController@miami')->name('miami228');

Route::get('galerie', 'Visitors\PagesController@galerie')->name('galerie');
