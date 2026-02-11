<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
</head>

<body>
    <h3>Create a post now!</h3>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        <label for="body">Body</label>
        <textarea name="body">{{ old('body') }}</textarea>
        <button type="submit">Save</button>
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