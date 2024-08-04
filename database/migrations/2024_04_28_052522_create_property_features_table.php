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
        Schema::create('property_features', function (Blueprint $table) {
            $table->id();
            $table->string('lot_area');
            $table->string('bed_rooms');
            $table->string('bath_rooms');
            $table->string('luggage');
            $table->string('garage');
            $table->string('floor_area');
            $table->string('year_built');
            $table->string('water');
            $table->string('stories');
            $table->string('roofing');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
