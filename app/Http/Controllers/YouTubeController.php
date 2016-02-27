<?php

namespace PublicFunctionWeb\Http\Controllers;

class YouTubeController extends Controller {

    public function index() {
        $playlists = array(array());
        return view('youtube.index')->with('playlists', $playlists);

    }

    public function playlist($playlist_id) {
        $playlist = array();
        return view('youtube.plauylist')->with('playlist', $playlist);

    }

}