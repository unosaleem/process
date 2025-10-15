<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
     protected $fillable = [
        'image',
        'heading',
        'description',
    ];

    public $timestamps = true;
    protected $table = "facilities";
}
