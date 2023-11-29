<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kasir</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS styles -->
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body>
    <div class="container">
        <div class="mt-5">
            <h1>Detail Kasir</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kode Kasir: {{ $kasir->kode_kasir }}</h5>
                    <p class="card-text">Nama: {{ $kasir->nama }}</p>
                    <p class="card-text">HP: {{ $kasir->hp }}</p>
                </div>
            </div>

            <a href="{{ route('kasirs.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Kasir</a>
        </div>
    </div>

    <!-- Include Bootstrap JS and other scripts if needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Your custom scripts -->
    <script>
        // Add your custom scripts here
    </script>
</body>

</html>
