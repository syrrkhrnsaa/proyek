<!-- resources/views/barangs/edit.blade.php -->

<h1>Edit Barang</h1>

<form action="{{ route('barangs.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="KodeBarang" value="{{ $barang->KodeBarang }}"><br>
    <input type="text" name="NamaBarang" value="{{ $barang->NamaBarang }}"><br>
    <input type="text" name="Satuan" value="{{ $barang->Satuan }}"><br>
    <input type="text" name="HargaSatuan" value="{{ $barang->HargaSatuan }}"><br>
    <input type="text" name="Stok" value="{{ $barang->Stok }}"><br>
    <button type="submit">Simpan Perubahan</button>
</form>
