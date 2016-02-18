@extends('layouts.master')

@section('title')You Tube - Video | {{$video->title}}@endsection

@section('page_content')
    <h1 class="insidepost">You Tube Video - {{$video->title}}</h1>
    <div class="container-fluid video">
        <iframe width="100%" src="{{\PublicFunction\Helpers\Helper::getYouTubeUrl($video->video_id)}}" frameborder="0" allowfullscreen></iframe>
    </div>
@endsection