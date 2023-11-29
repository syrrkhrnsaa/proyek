<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kasir</title>
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
            <h1>Edit Kasir</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('kasirs.update', $kasir->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_kasir">Kode Kasir:</label>
                <input type="text" class="form-control" id="kode_kasir" name="kode_kasir" value="{{ old('kode_kasir', $kasir->kode_kasir) }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $kasir->nama) }}">
            </div>
            <div class="form-group">
                <label for="hp">HP:</label>
                <input type="text" class="form-control" id="hp" name="hp" value="{{ old('hp', $kasir->hp) }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <!-- Include Bootstrap JS and other scripts if needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Your custom scripts -->
    <script>
        // Add your custom scripts here
    </script>
</body>

</html>
