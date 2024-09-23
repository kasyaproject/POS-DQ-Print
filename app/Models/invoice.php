<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function preorder()
    {
        return $this->hasMany(produk::class, 'id', 'kode_invoice');
    }

    public function Customer()
    {
        return $this->hasOne(customer::class, 'id', 'id_cust');
    }

    public function user()
    {
        return $this->hasOne(user::class, 'id', 'id_pj');
    }
}
