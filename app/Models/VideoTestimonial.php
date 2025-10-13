<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoTestimonial extends Model
{
    protected $table = 'video_testimonials';

    protected $fillable = [
        'patient_name',
        'title',
        'description',
        'video',
    ];
}
