<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RareCase extends Model
{
    protected  $table = 'rare_cases';
    protected $fillable = [
        'title',
        'source',
        'short_description',
        'long_description',
        'image',
    ];
}
