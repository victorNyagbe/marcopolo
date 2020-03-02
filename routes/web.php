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
       Route::get('image-accueil/{home}/edit', 'Admin\HomeController@fadeEdit')->name('home.fadeEdit');
       Route::patch('image-accueil/{home}', 'Admin\HomeController@fadeUpdate')->name('home.fadeUpdate');
    });

    Route::prefix('boissons')->group(function () {
        Route::get('', 'Admin\DrinkController@index')->name('admin.drink');
        Route::get('ajouter', 'Admin\DrinkController@create')->name('admin.drinkCreate');
        Route::post('ajouter-processing', 'Admin\DrinkController@store')->name('admin.drinkStore');
        Route::get('{drink}', 'Admin\DrinkController@show')->name('admin.drinkShow');
        Route::get('{drink}/edit', 'Admin\DrinkController@edit')->name('admin.drinkEdit');
        Route::patch('{drink}/edit-processing', 'Admin\DrinkController@update')->name('admin.drinkUpdate');
        Route::delete('{drink}/processus-suppression', 'Admin\DrinkController@destroy')->name('admin.drinkDelete');
    });

    Route::prefix('djs')->group(function () {
       Route::get('', 'Admin\DiscJockeyController@index')->name('admin.djs');
       Route::get('ajouter', 'Admin\DiscJockeyController@create')->name('admin.djCreate');
       Route::post('ajouter-processing', 'Admin\DiscJockeyController@store')->name('admin.djStore');
       Route::get('{discJockey}', 'Admin\DiscJockeyController@show')->name('admin.djShow');
       Route::get('{discJockey}/edit', 'Admin\DiscJockeyController@edit')->name('admin.djEdit');
       Route::patch('{discJockey}/edit-processing', 'Admin\DiscJockeyController@update')->name('admin.djUpdate');
       Route::delete('{discJockey}/suppression', 'Admin\DiscJockeyController@destroy')->name('admin.djDelete');
    });

    Route::prefix('artiste')->group(function () {
       Route::get('', 'Admin\ArtistController@index')->name('admin.artist');
       Route::get('ajouter', 'Admin\ArtistController@create')->name('admin.artistCreate');
       Route::post('ajouter-processing', 'Admin\ArtistController@store')->name('admin.artistStore');
       Route::get('{artist}', 'Admin\ArtistController@show')->name('admin.artistShow');
       Route::get('{artist}/edit', 'Admin\ArtistController@edit')->name('admin.artistEdit');
       Route::patch('{artist}/edit-processing', 'Admin\ArtistController@update')->name('admin.artistUpdate');
       Route::delete('{artist}/suppression', 'Admin\ArtistController@destroy')->name('admin.artistDelete');
    });

    Route::prefix('miami')->group(function () {
       Route::get('couverture', 'Admin\MiamiController@couvertureIndex')->name('miami.couverture');
       Route::get('couverture/{miami}/edit', 'Admin\MiamiController@couvertureEdit')->name('miami.couvertureEdit');
       Route::post('couverture', 'Admin\MiamiController@couvertureStore')->name('miami.couvertureStore');
       Route::patch('couverture/{miami}', 'Admin\MiamiController@couvertureUpdate')->name('miami.couvertureUpdate');
       Route::get('images', 'Admin\MiamiController@imageIndex')->name('miami.image');
       Route::get('images/{miami}/edit', 'Admin\MiamiController@imageEdit')->name('miami.imageEdit');
       Route::post('images', 'Admin\MiamiController@imageStore')->name('miami.imageStore');
       Route::patch('images/{miami}', 'Admin\MiamiController@imageUpdate')->name('miami.imageUpdate');
    });

    Route::prefix('soirées')->group(function () {
       Route::get('', 'Admin\PartyController@index')->name('party.index');
       Route::post('ajouter-video', 'Admin\PartyController@store')->name('party.store');
       Route::delete('supprimer-video', 'Admin\PartyController@destroy')->name('party.delete');
    });

    Route::prefix('événements')->group(function () {
       Route::get('', 'Admin\EventController@index')->name('event.index');
       Route::get('creation', 'Admin\EventController@create')->name('event.create');
       Route::post('processus-creation', 'Admin\EventController@store')->name('event.store');
       Route::get('{event}', 'Admin\EventController@show')->name('event.show');
       Route::get('{event}/edit', 'Admin\EventController@edit')->name('event.edit');
       Route::patch('{event}', 'Admin\EventController@update')->name('event.update');
       Route::delete('{event}/suppression', 'Admin\EventController@destroy')->name('event.delete');
       Route::patch('{event}/finished', 'Admin\EventController@finished')->name('event.finished');
    });

    Route::prefix('galerie')->group(function (){
       Route::get('', 'Admin\GalleryController@index')->name('gallery.index');
       Route::post('', 'Admin\GalleryController@store')->name('gallery.store');
       Route::delete('{gallery}', 'Admin\GalleryController@destroy')->name('gallery.delete');
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

Route::get('événements', 'Visitors\PagesController@events')->name('events');

Route::get('soirées', 'Visitors\PagesController@parties')->name('parties');
