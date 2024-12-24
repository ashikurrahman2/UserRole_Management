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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_image')->nullable();
            $table->string('property_title')->nullable();
            $table->string('property_address')->nullable();
            $table->string('property_elements')->nullable();
            $table->integer('property_bath')->nullable();
            $table->integer('property_sqrt')->nullable();
            $table->string('property_amount')->nullable();
            $table->string('property_action')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
