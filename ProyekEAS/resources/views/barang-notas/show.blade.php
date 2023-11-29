<!-- resources/views/barang-notas/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Barang Nota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Detail Barang Nota</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Kode Nota</th>
                            <td>{{ $barangNota->kode_nota }}</td>
                        </tr>
                        <tr>
                            <th>Kode Barang</th>
                            <td>{{ $barangNota->kode_barang }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Barang</th>
                            <td>{{ $barangNota->jumlah_barang }}</td>
                        </tr>
                        <tr>
                            <th>Harga Satuan</th>
                            <td>{{ $barangNota->harga_satuan }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>{{ $barangNota->jumlah }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('barang-notas.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
