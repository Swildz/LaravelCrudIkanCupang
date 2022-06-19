<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_ikan', 'harga', 'penjual', 'gambar_ikan'
    ];
}
