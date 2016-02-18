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
    Route::get('/playlist/{playlist_id}/video/{video_id}', ['as' => 'playlist.video.show' , 'uses' => 'PlaylistController@showVideo']);
    Route::get('/live-streaming', ['as' => 'livestream.home' , 'uses' => 'LiveStreamController@index']);
    Route::get('/you-tube/playlist', ['as' => 'youtube.playlists', 'uses' => 'YouTubeController@index']);
    Route::get('/you-tube/playlist/{playlist_id}', ['as' => 'youtube.playlists.playlist', 'uses' => 'YouTubeController@playlist']);
});

