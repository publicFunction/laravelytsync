<?php

namespace PublicFunction\Http\Controllers;


use PublicFunction\YouTube\Services\Repository\VideoRepository;
use PublicFunction\YouTube\Services\Repository\PlaylistRepository;

class PlaylistController extends Controller {
    
    public function __construct(VideoRepository $videoRepository, PlaylistRepository $playlistRepository)
    {
        $this->_video_repository = new VideoRepository();
        $this->_playlist_repository = new PlaylistRepository();
    }

    public function index($playlist_id) {
        $playlist = $this->_playlist_repository->getPlaylistsByPlaylistId($playlist_id);
        $videos = $this->_video_repository->getVideosByPlaylistId($playlist->id);

        return view('youtube.playlist')
            ->with('videos', $videos)
            ->with('playlist', $playlist);
    }

    public function showVideo($playlist_id, $video_id) {
        $video = $this->_video_repository->getVideoByVideoId($video_id);
        
        return view('youtube.video')
            ->with('video', $video);
    }

}