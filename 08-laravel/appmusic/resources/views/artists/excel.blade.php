<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Artist</title>
</head>
<body>
    <table>
        <tr>

        </tr>
        @foreach ($artists as $artist)
            <tr>
                <td>{{ $artist->id }}</td>
                <td>{{ $artist->fullname }}</td>
                <td>{{ $artist->email }}</td>
                <td>{{ $artist->phone }}</td>
                <td>{{ $artist->role }}</td>
                <td><img src="{{ public_path().'/images/'.$artist->photo }}"></td>
            </tr>
        @endforeach
    </table>
</body>
</html>