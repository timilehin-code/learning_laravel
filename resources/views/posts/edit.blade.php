<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Edit a post!</h3>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        <label for="body">Body</label>
        <textarea name="body">{{ old('body', $post->body) }}</textarea>
        <button type="submit">Update</button>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </form>
</body>

</html>