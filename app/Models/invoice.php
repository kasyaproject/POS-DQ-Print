<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_invoice';

    public function preorder()
    {
        return $this->hasMany(produk::class, 'id', 'kode_invoice');
    }
}
