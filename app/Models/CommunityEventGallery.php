<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityEventGallery extends Model
{
    protected $table = 'community_event_galleries';

    protected $fillable = [
        'community_event_id', 
        'images',
        'caption',
    ];

    public function event()
    {
        return $this->belongsTo(CommunityEvent::class, 'community_event_id');
    }
}
