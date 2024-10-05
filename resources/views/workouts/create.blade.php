<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Add Workout</title>
    <style>
        body{
            background-color: rgb(139, 175, 206);
        }
    </style>
</head>
<body>
    <h1>Add New Workout</h1>
    <form action="{{ route('workouts.store') }}" method="POST">
        @csrf
        <label for="workout_name">Workout Name:</label>
        <input type="text" name="workout_name" required>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <button type="submit">Add Workout</button>
    </form>

    <a href="{{ route('workouts.index') }}">Back to Workouts</a>
    <a href="{{ route('home') }}">Back to GymManagement</a>
</body>
</html>

