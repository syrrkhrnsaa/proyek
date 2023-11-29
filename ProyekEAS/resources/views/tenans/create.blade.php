<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Tenan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Create Tenan</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('tenans.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_tenan">Kode Tenan:</label>
                        <input type="text" class="form-control" id="kode_tenan" name="kode_tenan">
                    </div>
                    <div class="form-group">
                        <label for="nama_tenan">Nama Tenan:</label>
                        <input type="text" class="form-control" id="nama_tenan" name="nama_tenan">
                    </div>
                    <div class="form-group">
                        <label for="hp">HP:</label>
                        <input type="text" class="form-control" id="hp" name="hp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
