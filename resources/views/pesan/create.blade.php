<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kirim Pesan</title>
    <!-- Menambahkan Bootstrap untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Kirim Pesan</h1>

        <!-- Form untuk mengirim pesan -->
        <form id="messageForm">
            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Kirim Pesan</button>
        </form>

        <!-- Tampilkan Status -->
        <div id="statusMessage" class="mt-3"></div>
    </div>

    <!-- Menambahkan JQuery dan Bootstrap JS untuk AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Mengirim data form ke API menggunakan AJAX
        $('#messageForm').on('submit', function (e) {
            e.preventDefault();  // Mencegah form submit secara default

            // Ambil nilai pesan dari form
            var pesan = $('#pesan').val();

            // Kirim data ke API menggunakan AJAX
            $.ajax({
                url: '/api/pesan',
                type: 'POST',
                data: {
                    pesan: pesan,
                    _token: '{{ csrf_token() }}', // CSRF token untuk keamanan
                },
                success: function (response) {
                    // Tampilkan status sukses
                    $('#statusMessage').html(`
                        <div class="alert alert-success">
                            ${response.message}
                        </div>
                    `);
                    // Reset form setelah pengiriman berhasil
                    $('#pesan').val('');
                },
                error: function (xhr) {
                    // Tampilkan error jika terjadi masalah
                    $('#statusMessage').html(`
                        <div class="alert alert-danger">
                            Terjadi kesalahan: pesan gagal dikirim karena tidak ada pesan yang diketik.
                        </div>
                    `);
                }
            });
        });
    </script>
</body>
</html>
