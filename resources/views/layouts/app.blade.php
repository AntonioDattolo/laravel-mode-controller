<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>@yield("title", "Hello Laravel World")</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    @include('partials.main')
    @yield("content")
</body>
</html>