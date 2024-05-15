<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'qty',
        'harga',
        'hargaBB',
        'kategori',
    ];

    protected $primaryKey = 'kode_produk';
}
