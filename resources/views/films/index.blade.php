<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Film</title>
</head>
<body>

<div class="container mt-5">
    <h1 class="text">Daftar Film</h1>
    <!-- Filter berdasarkan genre -->
    <form action="{{ url('/films') }}" method="GET" class="mb-4">
        <div class="form-group d-flex">
            <label for="genre" class="mr-2">Filter by Genre:</label>
            <input type="text" id="genre" name="genre" value="{{ $genre }}" class="form-control w-25 mr-2">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>
    <br/>

    <!-- Menampilkan daftar film -->
    <table class="table table-bordered table-striped" >
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $film)
                <tr>
                    <td>{{ $film->title }}</td>
                    <td>{{ $film->genre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>