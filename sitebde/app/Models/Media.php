<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public $timestamps = false;
    protected $table = "medias";
    protected $fillable = [
        'id', 'id_event', 'id_author', 'src', 'masked'
    ];
}
