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

Route::get('/', 'HomeController@homepage');

Route::get('index', function () {
    return view('index');
});

Route::get('home', function () {
    return view('home');
});

Route::get('artist', function () {
    return view('artist');
});

Auth::routes();

Route::post('upload_art', 'ArtController@upload_art');

Route::get('/directory', 'ArtController@fillDirectory');

Route::get('logout', 'HomeController@logout');
