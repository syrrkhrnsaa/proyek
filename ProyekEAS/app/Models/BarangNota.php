<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    use HasFactory;

    protected $table = 'barang_notas';
    protected $fillable = [
        'kode_nota',
        'kode_barang',
        'jumlah_barang',
        'harga_satuan',
        'jumlah',
    ];

    public function nota()
    {
        return $this->belongsTo(Nota::class, 'kode_nota', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'id');
    }
}

