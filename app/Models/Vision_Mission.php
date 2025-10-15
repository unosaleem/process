<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vision_Mission extends Model
{
    protected $fillable = [
        'icon',
        'heading',
        'description',
        'stats',
        'slug',
    ];

    public $timestamps = true;
    protected $table = "vision_missions";
}
