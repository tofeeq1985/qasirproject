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
            $table->string('encrypted_id' , 500);
            $table->string('name');
            $table->string('area');
            $table->string('description',500);
            $table->string('price');
            $table->string('owner');
            $table->string('status');
            $table->unsignedBigInteger('pf_ID');
            $table->string('property_image');
            $table->string('owner_image');
            $table->foreign('pf_ID')->references('id')->on('properties');
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
