@extends('layouts.master')

@section('title')Home @endsection

@section('page_content')
    <h1 class="insidepost">HOME</h1>
    <p>Hello, World!</p>
    <section>
        @include('playlist_list')
    </section>
@endsection