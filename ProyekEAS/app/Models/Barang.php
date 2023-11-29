<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'barangs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_barang', // Sesuaikan dengan nama kolom yang ada di tabel
        'nama_barang',
        'satuan',
        'harga_satuan',
        'stok',
    ];
}
