<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group([], function() {

    Route::get('/', ['as' => 'home' , 'uses' => 'HomeController@index']);
    Route::get('/playlist/{playlist_id}', ['as' => 'playlist.videos' , 'uses' => 'PlaylistController@index']);
});

