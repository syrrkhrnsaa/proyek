<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Show Tenan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Tenan Details</h2>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Kode Tenan:</th>
                            <td>{{ $tenan->kode_tenan }}</td>
                        </tr>
                        <tr>
                            <th>Nama Tenan:</th>
                            <td>{{ $tenan->nama_tenan }}</td>
                        </tr>
                        <tr>
                            <th>HP:</th>
                            <td>{{ $tenan->hp }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('tenans.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
