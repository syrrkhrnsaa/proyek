<!-- resources/views/barang-notas/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Barang Nota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Barang Nota</h2>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <a href="{{ route('barang-notas.create') }}" class="btn btn-primary">Tambah Barang Nota</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode Nota</th>
                            <th>Kode Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($barangNotas as $barangNota)
                            <tr>
                                <td>{{ $barangNota->nota->kode_nota }}</td>
                                <td>{{ $barangNota->barang->kode_barang }}</td>
                                <td>{{ $barangNota->jumlah_barang }}</td>
                                <td>{{ $barangNota->harga_satuan }}</td>
                                <td>{{ $barangNota->jumlah }}</td>
                                <td>
                                    <a href="{{ route('barang-notas.show', $barangNota->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('barang-notas.edit', $barangNota->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('barang-notas.destroy', $barangNota->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang nota ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Tidak ada barang nota</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
