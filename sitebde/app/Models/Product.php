<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'label', 'description', 'price', 'id_category', 'img_src', 'stock'
    ];
}
