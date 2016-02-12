<?php

Route::get('you-tube/', '\PublicFunction\YouTube\YouTubeController@index');
Route::get('you-tube/playlists', '\PublicFunction\YouTube\YouTubeController@playlists');