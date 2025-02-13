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
        Schema::create('fisheries', function (Blueprint $table) {
            $table->id(); // Link to common items table
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('fishing_ground')->nullable();
            $table->text('scientific_name')->nullable();
            $table->text('english_name')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fisheries');
    }
};
