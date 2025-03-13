<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Add Member</title>
    <style>
        div{
            display: flex;
            width: 100%;
            gap: 1px;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>JOIN MEMBER</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="number" name="phone" required>

        <label for="membership_plan">Membership Plan:</label>
        <input type="text" name="membership_plan" required>

        <button type="submit">JOIN</button>
    </form>
    <div>
    <a href="{{ route('members.index') }}">Back to Members</a>
    <a href="{{ route('home') }}">Back to Home</a>
</div>

</body>
</html>
