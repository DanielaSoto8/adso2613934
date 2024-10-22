<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Artists</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Full name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Photo</th>
        </tr>
        @foreach ($artists as $artist)
        <tr>
            <td>{{ $artist->id }}</td>
            <td>{{ $artist->fullname }}</td>
            <td>{{ $artist->gender }}</td>
            <td>{{ $artist->email }}</td>
            <td>{{ $artist->phone }}</td>
            <td><img src="{{ public_path('images/' . $artist->photo) }}" width="40px"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>