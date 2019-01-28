<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'content', 'id_author', 'id_media', 'masked'
    ];
}
