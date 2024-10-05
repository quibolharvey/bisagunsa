<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('workouts.index') }}">Workouts</a>
            <a href="{{ route('members.index') }}">Members</a>
            <a href="{{ route('trainers.index') }}">Trainers</a>
            <a href="{{ route('membership-plans.index') }}">Membership Plans</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Gym Management System © 2024</p>
    </footer>
</body>
</html>
