<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityEvent extends Model
{
     protected  $table = 'community_events';
    protected $fillable = [
        'title', 'slug', 'short_description', 'long_description', 'image'
    ];

    // One event has many gallery images
    public function galleries()
    {
        return $this->hasMany(CommunityEventGallery::class, 'community_event_id');
    }

}

