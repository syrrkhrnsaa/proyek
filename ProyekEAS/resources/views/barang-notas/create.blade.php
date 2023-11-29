<!-- resources/views/barang-notas/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang Nota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Tambah Barang Nota</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('barang-notas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_nota">Kode Nota:</label>
                        <input type="text" class="form-control" id="kode_nota" name="kode_nota" value="{{ old('kode_nota') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang:</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ old('kode_barang') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang:</label>
                        <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ old('jumlah_barang') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_satuan">Harga Satuan:</label>
                        <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ old('harga_satuan') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('barang-notas.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
