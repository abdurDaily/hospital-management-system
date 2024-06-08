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
        Schema::create('doctor_data', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name');
            $table->string('doctor_dessignation')->default('doctor');
            $table->string('doctor_qualification');
            $table->string('doctor_number');
            $table->string('doctor_email');
            $table->string('doctor_about')->nullable();
            $table->string('doctor_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_data');
    }
};
