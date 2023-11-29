<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $table = 'kasirs'; // Menyatakan bahwa model ini terhubung dengan tabel 'kasirs'
    protected $fillable = [
        'kode_kasir',
        'nama',
        'hp',
    ];
}
