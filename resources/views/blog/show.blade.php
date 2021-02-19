@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('main')

<div class="posts flex column">
    <div class="post_card flex column">
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <span>Author: {{$post->author}}</span>
        
    </div>
</div>


@endsection