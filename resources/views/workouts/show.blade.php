<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .workout-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .workout-details h2 {
            margin: 0 0 10px 0;
        }

        .workout-details p {
            margin: 5px 0;
        }

        a {
            display: inline-block;
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Workout: {{ $workout->name }}</h1>
    <div class="workout-details">
        <h2>Details:</h2>
        <p><strong>Description:</strong> {{ $workout->description }}</p>
        <p><strong>Duration:</strong> {{ $workout->duration }} minutes</p>
    </div>

    <a href="{{ route('workouts.index') }}">Back to Workouts</a>
</body>
</html>
