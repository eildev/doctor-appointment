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
        Schema::create('dr_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dr_id');
            $table->string('name');
            $table->string('dr_image')->nullable();
            $table->string('specialization');
            $table->string('qualification');
            $table->string('dr_facebook')->nullable();
            $table->string('dr_twitter')->nullable();
            $table->string('dr_instragram')->nullable();
            $table->string('other_link')->nullable();
            $table->integer('experience_years');
            $table->text('bio');
            $table->foreign('dr_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dr_infos');
    }
};
