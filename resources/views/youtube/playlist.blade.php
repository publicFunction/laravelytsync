@extends('layouts.master')

@section('title')You Tube - Playlists | {{$playlist->title}}@endsection

@section('page_content')
    <h1 class="insidepost">You Tube Playlist - {{$playlist->title}}</h1>
    <nav>
        @foreach($videos as $video)
            @if(strpos($video->title, "Private") !== 0)
                <div class="video item">
                    <img src="{{$video->getThumbnailUrl('medium')}}" alt="{{$video->title}}" />
                    <a href="{{URL::route('playlist.video.show', array($playlist->playlist_id, $video->video_id))}}" class="color-code" title="{{$video->title}}">
                        <span class="title">{{$video->title}}</span>
                    </a>
                </div>
            @endif
        @endforeach
    </nav>
@endsection