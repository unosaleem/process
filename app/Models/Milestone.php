<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
  protected $fillable = [
        'icon',
        'heading',
        'description',
        'year',
        'slug',
    ];

    public $timestamps = true;
    protected $table = "milestones";
}
