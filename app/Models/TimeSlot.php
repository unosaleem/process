<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    //
    protected $fillable = [
        'slot', 
        'is_active'
    ];

     protected $table = 'time_slots';
    public $timestamps = true;
}
