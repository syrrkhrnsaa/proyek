<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Nota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Create Nota</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('notas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_tenan">nama Tenan:</label>
                <input type="text" name="kode_tenan" id="kode_tenan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_kasir">nama Kasir:</label>
                <input type="text" name="kode_kasir" id="kode_kasir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tgl_nota">Tanggal Nota:</label>
                <input type="date" name="tgl_nota" id="tgl_nota" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jam_nota">Jam Nota:</label>
                <input type="time" name="jam_nota" id="jam_nota" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah_belanja">Jumlah Belanja:</label>
                <input type="number" name="jumlah_belanja" id="jumlah_belanja" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="diskon">Diskon:</label>
                <input type="number" name="diskon" id="diskon" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" name="total" id="total" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Buat Nota</button>
        </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
