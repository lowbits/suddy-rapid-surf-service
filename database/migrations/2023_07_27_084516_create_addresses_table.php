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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surf_spot_id')->constrained()->cascadeOnDelete();
            $table->string('address_line')->index();
            $table->string('address_line_2')->index();
            $table->string('street_number');
            $table->string('city');
            $table->string('region')->nullable();
            $table->string('county')->nullable();
            $table->string('postal_code');
            $table->string('country');
            $table->point('coordinate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
