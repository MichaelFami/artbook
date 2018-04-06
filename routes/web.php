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

Route::get('/seeartist/{id}', 'ArtController@fillOtherProfile');



Route::get('artist', 'ArtController@fillDirectoryProfile');

Auth::routes();

Route::post('/upload_art', 'ArtController@upload_art');

Route::post('/upload_photo', 'ArtController@upload_photo');

Route::post('/upload_bio', 'ArtController@upload_bio');



Route::get('home', 'ArtController@fillDirectory');


Route::get('logout', 'HomeController@logout');
Route::get('search', 'ArtController@search');
