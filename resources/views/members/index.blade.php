<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Members List</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        div{
            display: flex;
            justify-content: flex-start;
            width: 100%;
            gap: 1px;
        }
        .edit{
            text-align: center;
            background-color: green;
        }
        .edit:hover{
            background-color: rgb(117, 188, 117);
        }
        .delete{
            background-color: red;
        }
        .delete:hover{
            background-color: rgb(209, 135, 135);
        }
    </style>
</head>
<body>
    <h1>Members List</h1>
    <div>
    <a class="back" href="{{ route('home') }}">Back</a>
    <a class="add" href="{{ route('members.create') }}">Join</a>
</div>

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

                    <form action="{{ route('members.destroy', $member->id) }}" method="POST">
                        <a class="edit" href="{{ route('members.edit', $member->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="delete" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
