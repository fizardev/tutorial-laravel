<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item{{ request()->is('about') ? ' active' : '' }}">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item{{ request()->is('contact') ? ' active' : '' }}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item{{ request()->is('posts') ? ' active' : '' }}">
                        <a class="nav-link" href="/posts">Posts</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        @include('/posts/alert')
        @yield('content')

    {{-- navbar end --}}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
