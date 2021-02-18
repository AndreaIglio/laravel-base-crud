@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('main')

@foreach($posts as $post)

<div class="post_card flex column">
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>

</div>

@endforeach

@endsection