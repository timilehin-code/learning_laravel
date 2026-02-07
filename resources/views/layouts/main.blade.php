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
    <header>
        <img src="{{ asset("images/images.jpg") }}" alt="" width="400" height="5 00">
        @yield("header")
    </header>
    <main>
               @yield("main")

    </main>
    <footer>
       @yield("footer")
    </footer>
</body>

</html>