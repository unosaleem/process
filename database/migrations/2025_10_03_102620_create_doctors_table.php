<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
             // Basic Info (Homepage)
            $table->string('name');
            $table->string('description');
            $table->string('experience');
            $table->string('designation');
            $table->string('qualification');
            $table->string('speciality');
            $table->string('profile_image');
            $table->string('profile_url');
            $table->string('appointment_url');

            // Detail Page Info
            $table->string('brief_profile_heading');
            $table->string('brief_profile_description');
            $table->string('metrics');
            $table->text('notable_records'); 

            // Achievements
            $table->string('professional_heading');
            $table->string('professional_subheading');
            $table->longText('professional_description');
            $table->longText('training_record');

            // Specialized Procedures
            $table->string('specialized_heading'); 
            $table->string('specialized_subheading');
            $table->string('specialized_title'); 
            $table->longText('specialized_description');

            // Areas of Specialization
            $table->json('areas_of_specialization');

            // Professional Contributions
            $table->string('contributions_heading');
            $table->longText('contributions_description');
            $table->longText('latest_achievement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */               
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
