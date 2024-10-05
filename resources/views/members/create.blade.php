<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Add Member</title>
    <style>
        body{
            background-color: rgb(139, 175, 206);
        }
    </style>
</head>
<body>
    <h1>Add New Member</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>

        <label for="membership_plan">Membership Plan:</label>
        <input type="text" name="membership_plan" required>

        <button type="submit">Add Member</button>
    </form>

    <a href="{{ route('members.index') }}">Back to Members</a>
    <a href="{{ route('home') }}">Back to GymManagement</a>

</body>
</html>
