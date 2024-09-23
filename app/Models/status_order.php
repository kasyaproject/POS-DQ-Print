<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_order extends Model
{
    use HasFactory;

    public function kasir()
    {
        return $this->hasOne(user::class, 'id', 'id_kasir');
    }

    public function desain()
    {
        return $this->hasOne(user::class, 'id', 'id_design');
    }

    public function operator()
    {
        return $this->hasOne(user::class, 'id', 'id_operator');
    }

    public function finishing()
    {
        return $this->hasOne(user::class, 'id', 'id_finishing');
    }
}
