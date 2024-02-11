<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Creative</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="{{ route('main.index') }}"><h1>LARAVEL CREATIVE</h1></a>
    <div><a href="{{ route('about.index') }}">About</a></div>
    <div><a href="{{ route('post.index') }}">Posts</a></div>
    <div><a href="{{ route('panel.index') }}">Control Panel of posts</a></div>
    <div><a href="{{ route('contact.index') }}">Contacts</a></div>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
