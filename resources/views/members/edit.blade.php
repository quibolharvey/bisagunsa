<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Edit Member</title>
    <style>
        body{
            background-color: rgb(139, 175, 206);
        }
    </style>
</head>
<body>
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $member->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $member->email }}" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ $member->phone }}" required>

        <label for="membership_plan">Membership Plan:</label>
        <input type="text" name="membership_plan" value="{{ $member->membership_plan }}" required>

        <button type="submit">Update Member</button>
    </form>

    <a href="{{ route('members.index') }}">Back to Members</a>
</body>
</html>
