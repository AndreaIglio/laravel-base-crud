@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('main')

<div class="posts flex column">
    <div class="post_card flex column">
        <h2>{{$post_shown->title}}</h2>
        <p>{{$post_shown->content}}</p>
        <span>Author: {{$post_shown->author}}</span>
        
    </div>
</div>


@endsection