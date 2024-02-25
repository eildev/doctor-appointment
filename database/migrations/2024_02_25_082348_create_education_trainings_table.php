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
        Schema::create('education_trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dr_id');
            $table->foreign('dr_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('institution_name');
            $table->string('degree');
            $table->integer('start_year');
            $table->integer('end_year');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_trainings');
    }
};
