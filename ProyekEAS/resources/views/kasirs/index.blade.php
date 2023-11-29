<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kasir</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Memuat jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Memuat Bootstrap JavaScript setelah jQuery -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="mt-5">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h1>Daftar Kasir</h1>

            <a href="{{ route('kasirs.create') }}" class="btn btn-primary mb-3">Tambah Kasir Baru</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Kasir</th>
                        <th>Nama</th>
                        <th>HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kasirs as $kasir)
                        <tr>
                        <td style="color: black;">{{ $kasir->kode_kasir }}</td>
                        <td style="color: black;">{{ $kasir->nama }}</td>
                        <td style="color: black;">{{ $kasir->hp }}</td>
                            <td>
                                <a href="{{ route('kasirs.show', $kasir->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('kasirs.edit', $kasir->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('kasirs.destroy', $kasir->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kasir ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Tidak ada data kasir.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
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
