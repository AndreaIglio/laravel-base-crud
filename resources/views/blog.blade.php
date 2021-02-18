@extends('layout.app')

@section('main')

@foreach($posts as $post)

<h2>{{$post->title}}</h2>
<p>{{$post->content}}</p>


@endforeach

endsection