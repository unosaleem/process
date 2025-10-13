<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'description',
        'experience',
        'designation',
        'qualification',
        'speciality',
        'profile_image',
        'profile_url',
        'appointment_url',
        'brief_profile_heading',
        'brief_profile_description',
        'metrics',
        'notable_records',
        'professional_heading',
        'professional_subheading',
        'professional_description',
        'training_record',
        'specialized_heading',
        'specialized_subheading',
        'specialized_title',
        'specialized_description',
        'areas_of_specialization',
        'contributions_heading',
        'contributions_description',
        'latest_achievement'
    ];

    public $timestamps = true;
    protected $table = "doctors";
}
