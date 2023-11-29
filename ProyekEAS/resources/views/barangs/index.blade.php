<!-- resources/views/barangs/index.blade.php -->

<h1>Daftar Barang</h1>

<a href="{{ route('barangs.create') }}">Tambah Barang</a>

<table>
    <thead>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Satuan</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $barang)
        <tr>
            <td>{{ $barang->KodeBarang }}</td>
            <td>{{ $barang->NamaBarang }}</td>
            <td>{{ $barang->Satuan }}</td>
            <td>{{ $barang->HargaSatuan }}</td>
            <td>{{ $barang->Stok }}</td>
            <td>
                <a href="{{ route('barangs.show', $barang->id) }}">Detail</a>
                <a href="{{ route('barangs.edit', $barang->id) }}">Edit</a>
                <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
