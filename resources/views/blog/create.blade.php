@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('main')
<div class="new_post">
    <form action="{{route('blog.store')}}" method="POST">
        @csrf
        <legend>New Post</legend>

        <div class="form-group flex column">
            <label for="title">Title</label>

            <input type="text" name="title">

            <label for="author">Author</label>
            <input type="text" name="author">


            <label for="body">Content</label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection