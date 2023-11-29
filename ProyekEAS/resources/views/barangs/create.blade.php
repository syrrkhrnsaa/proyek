<!-- resources/views/barangs/create.blade.php -->

<h1>Tambah Barang</h1>

<form action="{{ route('barangs.store') }}" method="POST">
    @csrf
    <input type="text" name="KodeBarang" placeholder="Kode Barang"><br>
    <input type="text" name="NamaBarang" placeholder="Nama Barang"><br>
    <input type="text" name="Satuan" placeholder="Satuan"><br>
    <input type="text" name="HargaSatuan" placeholder="Harga Satuan"><br>
    <input type="text" name="Stok" placeholder="Stok"><br>
    <button type="submit">Simpan</button>
</form>
