<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'notas';
    protected $fillable = [
        'kode_tenan',
        'kode_kasir',
        'tgl_nota',
        'jam_nota',
        'jumlah_belanja',
        'diskon',
        'total',
    ];

    public function tenan()
    {
        return $this->belongsTo(Tenan::class, 'kode_tenan', 'id');
    }

    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'kode_kasir', 'id');
    }
}

