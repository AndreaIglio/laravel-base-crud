<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Create Blog post</title>
</head>

<body>

    <form action="{{route('blog.store')}}" method="POST">
        @csrf
        <legend>New Post</legend>

        <div class="form-group">
            <input type="text" name="title">
            <label for="title">Title</label>

            <input type="text" name="author">
            <label for="author">Author</label>
            
            
            <label for="body">Content</label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>