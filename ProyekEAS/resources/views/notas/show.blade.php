<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Show Nota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Show Nota</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nota Information</h5>
                        <p class="card-text"><strong>No:</strong> {{ $nota->id }}</p>
                        <p class="card-text"><strong>Kode Tenan:</strong> {{ $nota->kode_tenan }}</p>
                        <p class="card-text"><strong>Kode Kasir:</strong> {{ $nota->kode_kasir }}</p>
                        <p class="card-text"><strong>Tanggal Nota:</strong> {{ $nota->tgl_nota }}</p>
                        <p class="card-text"><strong>Jam Nota:</strong> {{ $nota->jam_nota }}</p>
                        <p class="card-text"><strong>Jumlah Belanja:</strong> {{ $nota->jumlah_belanja }}</p>
                        <p class="card-text"><strong>Diskon:</strong> {{ $nota->diskon }}</p>
                        <p class="card-text"><strong>Total:</strong> {{ $nota->total }}</p>
                        <a href="{{ route('notas.edit', $nota->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('notas.destroy', $nota->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this nota?')">Delete</button>
                        </form>
                        <a href="{{ route('notas.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
