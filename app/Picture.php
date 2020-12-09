<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['image_name'];
    protected $casts = [
        'image_name' => 'array',
    ];
}
