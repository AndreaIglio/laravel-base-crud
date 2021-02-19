@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('main')

@foreach($posts as $post)

<div class="container blog flex column">
    <div class="post_card flex column">
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
    </div>
</div>

<a href="{{route('blog.create')}}" class="btn">Create new posts</a>


@endforeach

@endsection