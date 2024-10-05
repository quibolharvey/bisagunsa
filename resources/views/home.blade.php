<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Link CSS if needed -->
    <style>
        nav{
            justify-content: center;
            display: flex;
            gap: 50px;
        }
        h1{
            margin-top: 50px;
        }
        body{
            background-color: rgb(139, 175, 206);
        }
        img{
            margin: auto;
            border-radius: 10px;
            width: 700px;
        }div{
            display: flex;
            justify-content: center;
            margin-top: 50px;

        }
    </style>
</head>
<body>
    <h1>Welcome to the Gym Management System</h1>
    <nav>
            <a href="{{ route('members.index') }}">Members</a>
            <a href="{{ route('workouts.index') }}">Workouts</a>
    </nav>
    <div>
    <img src="{{ asset ('images/arnold.jpeg')}}" alt="nigga">
</div>
</body>
</html>
