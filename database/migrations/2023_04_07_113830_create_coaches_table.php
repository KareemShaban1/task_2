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
        Schema::create('coaches', function (Blueprint $table) {
            $table->id('coach_id');
            // $table->string('coach_id')->nullable();
            $table->string('coach_url')->nullable();
            $table->string('short_name')->nullable();
            $table->string('long_name')->nullable();
            $table->string('dob')->nullable();
            $table->unsignedSmallInteger('nationality_id')->nullable();
            $table->string('nationality_name')->nullable();
            $table->string('face_url')->nullable();
            $table->string('sex');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
