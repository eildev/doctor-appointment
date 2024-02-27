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
        Schema::create('consulting_centers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dr_id');
            $table->foreign('dr_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->text('address');
            $table->string('contact_email');
            $table->string('contact_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consulting_centers');
    }
};
