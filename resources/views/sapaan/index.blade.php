<!-- resources/views/greet.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nama</title>
    <!-- Menambahkan Bootstrap CSS untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Form Input Nama</h2>
    {{-- pesannya dalam bentuk JSON --}}
    <form action="{{ url('/sapaan') }}" method="POST"> 
    {{-- <form id="greetForm">  //digunakan jika ingin pesannya muncul diui --}}
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <button type="submit" class="btn btn-primary">Sapa Saya</button>
    </form>

    <div id="result" class="mt-4">
        <!-- Hasil sapa akan ditampilkan di sini setelah form disubmit -->
    </div>
</div>

<!-- Menambahkan Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Menangani form submission menggunakan AJAX
    // document.querySelector('form').addEventListener('submit', function(event) {
    //     event.preventDefault();

    //     let formData = new FormData(this);

     // Menangani form submission menggunakan AJAX
     document.getElementById('greetForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form untuk submit secara default

        let formData = new FormData(this);
        let nama = formData.get('nama');
        
        // Memeriksa apakah nama diisi
        if (!nama) {
            document.getElementById('result').innerHTML = '<div class="alert alert-danger">Mohon masukkan nama Anda!</div>';
            return;
        }

        // Mengirimkan data form ke API menggunakan Fetch API (AJAX)
        fetch('{{ url('/sapaan') }}', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                nama: nama,
                _token: formData.get('_token'), // Mengirimkan token CSRF
            })
        })
        .then(response => response.json())
        .then(data => {
            // Menampilkan hasil respon dari API
            document.getElementById('result').innerHTML = `<div class="alert alert-info">${data.message}</div>`;
        })
        .catch(error => {
            // Menampilkan error jika ada
            document.getElementById('result').innerHTML = `<div class="alert alert-danger">Terjadi kesalahan: ${error.message}</div>`;
        });
    });
</script>

</body>
</html>
