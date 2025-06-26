<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Tec '24 - @yield('title')</title>
    <link rel="icon" href="{{ asset('assets/img/bulet.jpeg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/members.css') }}" />
</head>
<body>
    <div class="stars"></div>
    <div class="container">
        <nav class="sidebar">
            <div class="logo">
                <span>SPACE</span>
                <div class="logo-icon">
                    <img src="{{ asset('assets/img/remove bg.png') }}" alt="Logo" class="logo-img" />
                </div>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <svg class="nav-icon" ...>...</svg>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/members') }}" class="nav-link">
                        <svg class="nav-icon" ...>...</svg>
                        <span>Members</span>
                    </a>
                </li>
                </ul>
        </nav>

        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>
</html>
