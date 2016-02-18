<?php

namespace PublicFunction\Helpers;


use PublicFunction\YouTube\Services\Repository\PlaylistRepository;
use PublicFunction\YouTube\Services\Repository\VideoRepository;

class Helper {

    const YOU_FULL_URL = "//www.youtube.com/?";
    private static $query_params;

    /**
     * @param PlaylistRepository $playlistRepository
     * @param VideoRepository $videoRepository
     */
    public function __construct(PlaylistRepository $playlistRepository, VideoRepository $videoRepository) {
        $this->playlist_repository = $playlistRepository;
        $this->video_repository = $videoRepository;
    }

    public static function getQueryParams() {
        return self::$query_params = array('watch' => "watch=");
    }
    /**
     * @return array
     */
    public static function generateMainMenu() {
        return array('/' => 'Home' );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function generatePlaylistMenu() {
        $repos = new PlaylistRepository();
        $playlists = $repos->getPlaylists();
        return $playlists;
    }

    public static function countVideosInPlaylist($playlist_id) {
        $repos = new VideoRepository();
        $count = $repos->getCountOfVideosInPlaylist($playlist_id);
        return $count;
    }

    public static function getYouTubeUrl($yt_id){

        return self::YOU_FULL_URL.self::getQueryParams()['watch'].$yt_id;
    }

}
