<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientTestimonial extends Model
{
    protected $table = 'patient_testimonials';

    protected $fillable = [
        'patient_name',
        'title',
        'testimonial',
        'video',
    ];
}
