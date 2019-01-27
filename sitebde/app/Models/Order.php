<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 'quantity', 'date', 'id_product', 'id_user'
    ];
}
