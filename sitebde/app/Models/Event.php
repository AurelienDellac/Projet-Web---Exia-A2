<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'date', 'fee', 'id_activity', 'maskedss'
    ];
}
