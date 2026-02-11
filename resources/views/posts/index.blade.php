<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts page</title>
</head>

<body>
    <h1>Welcome to the posts page </h1>
    <a href="{{ route('posts.create') }}">Create a new post</a>
    @foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body}}</p>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are yo sure you want to delete this post?')">Delete</button>
        </form>
    </div>
    @endforeach
</body>

</html>