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
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('about.index') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('panel.index') }}">Control Panel of posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('contact.index') }}">Contacts</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

{{--        <nav class="nav">--}}
{{--            <ul>--}}
{{--                <li><a href="{{ route('about.index') }}">About</a></li>--}}
{{--                <li><a href="{{ route('post.index') }}">Posts</a></li>--}}
{{--                <li><a href="{{ route('panel.index') }}">Control Panel of posts</a></li>--}}
{{--                <li><a href="{{ route('contact.index') }}">Contacts</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
    </div>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
