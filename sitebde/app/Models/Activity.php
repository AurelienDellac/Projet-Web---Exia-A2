<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'title', 'description', 'img_src', 'id_author', 'masked'
    ];
}
