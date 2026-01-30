<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Welcome to the Home Page</h1>
    <a href="{{ route("testpage") }}">Go to test page</a>
    <form action="{{ route('submit_form') }}" method="post">
        @csrf
        <label for="fullName">Full name:</label>
        <input type="text" id="fullName" name="fullName" placeholder="Type your full name" required> <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Type your email" required> <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>