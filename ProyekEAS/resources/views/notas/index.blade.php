<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List of Notas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>List of Notas</h1>
                <div class="mb-3">
                    <a href="{{ route('notas.create') }}" class="btn btn-primary">Create Nota</a>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Tenan</th>
                            <th>Kode Kasir</th>
                            <th>Tanggal Nota</th>
                            <th>Jam Nota</th>
                            <th>Jumlah Belanja</th>
                            <th>Diskon</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notas as $nota)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $nota->kode_tenan }}</td>
                                <td>{{ $nota->kode_kasir }}</td>
                                <td>{{ $nota->tgl_nota }}</td>
                                <td>{{ $nota->jam_nota }}</td>
                                <td>{{ $nota->jumlah_belanja }}</td>
                                <td>{{ $nota->diskon }}</td>
                                <td>{{ $nota->total }}</td>
                                <td>
                                    <a href="{{ route('notas.show', $nota->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('notas.edit', $nota->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('notas.destroy', $nota->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this nota?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
