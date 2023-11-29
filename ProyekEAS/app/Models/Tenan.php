<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenan extends Model
{
    use HasFactory;
    protected $table = 'tenans';
    protected $fillable = [
        'kode_tenan', 
        'nama_tenan', 
        'hp'];
}
