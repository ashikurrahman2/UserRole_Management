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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->integer('rentproperty_id')->nullable();
            $table->string('rentproperty_type')->nullable();
            $table->string('rentproperty_status')->nullable();
            $table->string('rentproperty_price')->nullable();
            $table->integer('rent_rooms')->nullable();
            $table->integer('bed_rooms')->nullable();
            $table->integer('bath_rooms')->nullable();
            $table->integer('garages')->nullable();
            $table->date('build_up')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
