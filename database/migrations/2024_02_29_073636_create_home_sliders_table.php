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
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dr_id');
            $table->foreign('dr_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('short_caption')->nullable();
            $table->text('long_caption')->nullable();
            $table->string('slider_links')->nullable();;
            $table->text('slider_image')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sliders');
    }
};
