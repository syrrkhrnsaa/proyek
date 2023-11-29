<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tenans</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tenans</h1>
                <div class="mb-3">
                    <a href="{{ route('tenans.create') }}" class="btn btn-primary">Create Tenan</a>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Kode Tenan</th>
                        <th>Nama Tenan</th>
                        <th>HP</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($tenans as $tenan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tenan->kode_tenan }}</td>
                            <td>{{ $tenan->nama_tenan }}</td>
                            <td>{{ $tenan->hp }}</td>
                            <td>
                                <form action="{{ route('tenans.destroy', $tenan->id) }}" method="POST">
                                    <a href="{{ route('tenans.show', $tenan->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('tenans.edit', $tenan->id) }}" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this tenan?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
