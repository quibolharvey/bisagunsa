{{-- resources/views/members/show.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Member</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body{
            background-color: rgb(139, 175, 206);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Member Details</h1>
        <p><strong>Name:</strong> {{ $member->name }}</p>
        <p><strong>Email:</strong> {{ $member->email }}</p>
        <p><strong>Phone:</strong> {{ $member->phone }}</p>
        <p><strong>Membership Plan:</strong> {{ $member->membership_plan }}</p>

        <a href="{{ route('members.edit', $member->id) }}">Edit Member</a>
        <a href="{{ route('members.index') }}">Back to Members</a>
    </div>
</body>
</html>
