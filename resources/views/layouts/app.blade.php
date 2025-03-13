<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <p>Gym Log Management © 2024</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>
</html>
