@extends('layouts.master')

@section('title')You Tube - Video | {{$video->title}}@endsection

@section('page_content')
    <h1 class="insidepost">You Tube Video - {{$video->title}}</h1>
    {{$video}}
@endsection