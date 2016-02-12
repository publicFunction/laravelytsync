<?php

namespace PublicFunction\Http\Controllers;

class PlaylistController extends Controller {

    public function index($playlist_id) {

        return view('playlist.index')->with('playlist_id', $playlist_id);
    }

}