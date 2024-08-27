<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List All Artists</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>List All Artists</h1>
    <table class="table table-zebra" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Developer</th>
                <th>Release Date</th>
                <th>Category</th>
                <th>User</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $artist->id }}</td>
                    <td>{{ $artist->title }}</td>
                    <td>{{ $artist->developer }}</td>
                    <td>{{ $artist->releasedate }}</td>
                    <td>{{ $artist->category->name }}</td>
                    <td>{{ $artist->user->fullname }}</td>
                    <td>{{ $artist->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>