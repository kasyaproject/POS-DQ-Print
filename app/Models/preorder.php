<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preorder extends Model
{
    use HasFactory;

    public function produk()
    {
        return $this->hasOne(produk::class, 'kode_produk', 'kode_produk');
    }

    public function statusOrder()
    {
        return $this->hasOne(status_order::class, 'id', 'id_status');
    }
}
