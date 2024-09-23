<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preorder extends Model
{
    use HasFactory;

    public function invoiceinfo()
    {
        return $this->belongsTo(invoice::class, 'kode_invoice', 'id');
    }


    public function kodeProduk()
    {
        return $this->hasOne(produk::class, 'kode_produk', 'id_produk');
    }
    public function statusOrder()
    {
        return $this->hasOne(status_order::class, 'id', 'id_status');
    }
    public function Customer()
    {
        return $this->hasOne(customer::class, 'id', 'id_cust');
    }
    public function PJ()
    {
        return $this->hasOne(user::class, 'id', 'id_pj');
    }
}
