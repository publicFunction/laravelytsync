<?php

namespace PublicFunction\YouTube;


use PublicFunction\Http\Controllers\Controller;
use PublicFunction\YouTube\Lib\YouTube;
use PublicFunction\YouTube\Services\Repository\PlaylistRepository;
use PublicFunction\YouTube\Services\Repository\PlaylistThumbnailsRepository;

class YouTubeController extends Controller {

    private $app;
    private $client;

    public function __construct(PlaylistRepository $playlistRepository, PlaylistThumbnailsRepository $playlistThumbnailsRepsoitory) {
        $this->app = app();
        $config = $this->app['config'];
        $config_yt = $config['youtube'];
        $api = $config_yt['api'];

        $yt = new YouTube($api);
        $this->client = $yt->client();
        $this->_playlist_repository = $playlistRepository;
        $this->_playlist_thumb_repository = $playlistThumbnailsRepsoitory;
    }

    public function index() {
        $playlists = $this->_playlist_repository->getPlaylists();

        return \View::make('playlist')->with('playlists',$playlists);
    }

    public function playlists() {
        $playlists = $this->client->get('playlists');
        foreach($playlists->items as $index => $playlist) {
            $new_playlist = $this->_playlist_repository->getPlaylistsByPlaylistId($playlist->id);
            if($new_playlist !== null) {
                if($new_playlist->thumbnails->count()) {
                    //var_dump($new_playlist->thumbnails->detach());
                    //$new_playlist->thumbnails->detach();
                    foreach($new_playlist->thumbnails as $key => $thumbnail) {
                        //var_dump($thumbnail);
                        $thumbnail->detach();
                    }
                }
                $this->createThumbnails($playlist->snippet, $new_playlist->id);
                continue;
            }
            $new_playlist = $this->_playlist_repository->create($playlist);
            $this->createThumbnails($playlist->snippet, $new_playlist->id);
        }
    }

    private function createThumbnails($playlist, $playlist_id) {
        echo "TIME TO CREATE THUMBNAILS...<br />";
        foreach($playlist->thumbnails as $size => $thumbnail) {
            $thumb_data = (array)$thumbnail;
            $thumb_data['size'] = $size;
            $thumb_data['playlists_id'] = $playlist_id;
            $this->_playlist_thumb_repository->create($thumb_data);
        }
    }

}