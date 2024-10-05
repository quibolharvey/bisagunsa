<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Workouts</title>
    <style>
        body{
            background-color: rgb(139, 175, 206);
        }
    </style>
</head>
<body>
    <h1>Workouts</h1>
    <a href="{{ route('home') }}">Back</a>
    <a href="{{ route('workouts.create') }}">Add New Workout</a>

    <table border="1">
        <thead>
            <tr>
                <th>Workout Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workouts as $workout)
            <tr>
                <td>{{ $workout->workout_name }}</td>
                <td>{{ $workout->description }}</td>
                <td>
                    <a href="{{ route('workouts.edit', $workout->id) }}">Edit</a>
                    <form action="{{ route('workouts.destroy', $workout->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

