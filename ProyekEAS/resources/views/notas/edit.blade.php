<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Nota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Nota</h1>
                <form action="{{ route('notas.update', $nota->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <<div class="form-group">
                        <label for="kode_tenan">Kode Tenan:</label>
                        <select class="form-control" id="kode_tenan" name="kode_tenan">
                            <option value="">Pilih Kode Tenan</option>
                            @foreach ($tenans as $tenan)
                                <option value="{{ $tenan->id }}" {{ $nota->kode_tenan == $tenan->id ? 'selected' : '' }}>
                                    {{ $tenan->nama_tenan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kode_kasir">Kode Kasir:</label>
                        <select class="form-control" id="kode_kasir" name="kode_kasir">
                            <option value="">Pilih Kode Kasir</option>
                            @foreach ($kasirs as $kasir)
                                <option value="{{ $kasir->id }}" {{ $nota->kode_kasir == $kasir->id ? 'selected' : '' }}>
                                    {{ $kasir->nama_kasir }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tgl_nota">Tanggal Nota:</label>
                        <input type="date" class="form-control" id="tgl_nota" name="tgl_nota" value="{{ $nota->tgl_nota }}">
                    </div>

                    <div class="form-group">
                        <label for="jam_nota">Jam Nota:</label>
                        <input type="time" class="form-control" id="jam_nota" name="jam_nota" value="{{ $nota->jam_nota }}">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_belanja">Jumlah Belanja:</label>
                        <input type="text" class="form-control" id="jumlah_belanja" name="jumlah_belanja" value="{{ $nota->jumlah_belanja }}">
                    </div>

                    <div class="form-group">
                        <label for="diskon">Diskon:</label>
                        <input type="text" class="form-control" id="diskon" name="diskon" value="{{ $nota->diskon }}">
                    </div>

                    <div class="form-group">
                        <label for="total">Total:</label>
                        <input type="text" class="form-control" id="total" name="total" value="{{ $nota->total }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
