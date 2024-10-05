<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Members List</title>
    <style>
        body{
            background-color: rgb(139, 175, 206);
        }
    </style>
</head>
<body>
    <h1>Members</h1>
    <a href="{{ route('home') }}">Back</a>
    <a href="{{ route('members.create') }}">Add New Member</a>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Membership Plan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->membership_plan }}</td>
                <td>
                    <a href="{{ route('members.edit', $member->id) }}">Edit</a>
                    <form action="{{ route('members.destroy', $member->id) }}" method="POST">
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
