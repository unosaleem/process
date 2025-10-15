<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
     protected $fillable = [
        'state_id', 
        'name'
    ];

     protected $table = 'cities';
    public $timestamps = true;

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
