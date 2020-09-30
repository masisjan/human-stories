<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title', 'Contact App') </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href=" {{ asset('css/bootstrap.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('css/custom.css') }} " rel="stylesheet">
    <link href=" {{ asset('css/style_md.css') }} " rel="stylesheet">
    <link href=" {{ asset('css/style_sm.css') }} " rel="stylesheet">
    <link href=" {{ asset('css/style_xl.css') }} " rel="stylesheet">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
            <strong>Human-stories</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-toggler">
            <ul class="navbar-nav">
                @if(auth()->user()->type == 'admin')
                <li class="nav-item active"><a href=" {{ route('users.index') }} " class="nav-link">Users</a></li>
                @endif
                <li class="nav-item active"><a href=" {{ route('posts.index') }} " class="nav-link">Posts</a></li>
                <li class="nav-item active"><a href=" {{ route('friends.index') }} " class="nav-link">Friends</a></li>
                <li class="nav-item active"><a href=" {{ route('cities.index') }} " class="nav-link">Cities</a></li>
                <li class="nav-item active"><a href=" {{ route('music.index') }} " class="nav-link">Music</a></li>
                <li class="nav-item active"><a href=" {{ route('singers.index') }} " class="nav-link">Singers</a></li>
                <li class="nav-item active"><a href=" {{ route('posts.index') }} " class="nav-link">Comments</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item mr-2"><a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@yield('content')
<script src=" {{ asset('js/jquery.min.js') }} "></script>
<script src=" {{ asset('js/popper.min.js') }} "></script>
<script src=" {{ asset('js/bootstrap.min.js') }} "></script>
<script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>
