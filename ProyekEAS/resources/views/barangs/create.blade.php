<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kasir Baru</title>
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
            <h1>Tambah Barang Baru</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('barangs.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="kode_barang">Kode Barang:</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ old('kode_barang') }}">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}">
                </div>
                <div class="form-group">
                    <label for="satuan">Satuan:</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" value="{{ old('satuan') }}">
                </div>
                <div class="form-group">
                    <label for="harga_satuan">Harga Satuan:</label>
                    <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ old('harga_satuan') }}">
                </div>
                <div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="text" class="form-control" id="stok" name="stok" value="{{ old('stok') }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
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
