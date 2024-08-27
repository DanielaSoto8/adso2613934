<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Full name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>photo</th>

        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->fullname}}</td>
            <td>{{ $user->gender}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->phone}}</td>
            <td>{{ $user->role}}</td>
            <td><img src="{{public_path().'/images/'.$user->photo}}" width="40px"></td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>