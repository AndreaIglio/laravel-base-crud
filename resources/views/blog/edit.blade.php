@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('main')


<div class="edit_post">
    <form action="{{route('blog.update', $post->id)}}" method="post">
        @METHOD ('PATCH')
        @csrf
        <legend>Edit Post</legend>

        <div class="form-group flex column">
            <label for="title">Title</label>

            <input type="text" name="title" value="{{ $post->title }}">

            <label for="author">Author</label>
            <input type="text" name="author" value="{{ $post->author }}">


            <label for="body">Content</label>
            <textarea name="body" id="body" cols="30" rows="10">{{ $post->content}}</textarea>
        </div>
        <button type="" class="btn btn-primary">Edit</button>
    </form>
</div>


@endsection