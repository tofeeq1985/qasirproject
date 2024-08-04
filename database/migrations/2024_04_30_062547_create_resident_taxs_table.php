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
        Schema::create('resident_taxs', function (Blueprint $table) {
            $table->id();
            $table->string('family_code');
            $table->string('name');
            $table->string('phone_number');
            $table->string('address');
            $table->string('tax_name');
            $table->string('tax_amount');
            $table->string('persons');
            $table->string('total_tax');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resident_tax');
    }
};
