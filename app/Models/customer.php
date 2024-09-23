<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_cust',
        'no_telp',
    ];

    public function orderan()
    {
        return $this->hasMany(produk::class, 'id', 'id_cust');  // id = tabel customer, id_cust = tabel preorder
    }
}
