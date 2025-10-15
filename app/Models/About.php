<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $fillable = [
        'image',
        'heading',
        'description',
        'slug'
    ];

    public $timestamps = true;
    protected $table = "abouts";
}
