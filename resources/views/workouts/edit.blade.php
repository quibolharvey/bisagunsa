<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Workout</title>
    <style>
        body{
            background-color: rgb(139, 175, 206);
        }
    </style>
</head>
<body>
    <h1>Edit Workout</h1>
    <form action="{{ route('workouts.update', $workout->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="workout_name">Workout Name:</label>
        <input type="text" name="workout_name" value="{{ $workout->workout_name }}" required
