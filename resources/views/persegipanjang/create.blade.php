<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perhitungan Luas Persegi Panjang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Perhitungan Luas Persegi Panjang</h1>

        <!-- Form input panjang dan lebar -->
        <form action="{{ url('/api/menghitung-luas') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="panjang">Panjang:</label>
                <input type="number" id="panjang" name="panjang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lebar">Lebar:</label>
                <input type="number" id="lebar" name="lebar" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung Luas</button>
        </form>
    </div>
</body>
</html>
