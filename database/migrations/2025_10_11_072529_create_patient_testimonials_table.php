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
        Schema::create('patient_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('title')->nullable(); // optional title
            $table->text('testimonial'); // patient feedback
            $table->string('video')->nullable(); // patient video
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_testimonials');
    }
};
