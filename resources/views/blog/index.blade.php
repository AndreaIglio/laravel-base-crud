@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('main')
<div class="create_post">
    <a href="{{route('blog.create')}}" class="btn btn-info">Create new posts</a>
</div>
@foreach($posts as $post)

<div class="posts flex column">
    <div class="post_card flex column">
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <span>Author: {{$post->author}}</span>
        <div class="post_function">
            <a href="{{route('blog.edit', $post->id)}}"><i class="fas fa-edit"></i></a>
            <a href="{{route('blog.show', $post->id)}}"><i class="fas fa-eye"></i></a>

            <form action="{{ route('blog.destroy', $post->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>



        </div>
    </div>
</div>


@endforeach

@endsection