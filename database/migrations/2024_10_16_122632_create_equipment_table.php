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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();// Link to common items table
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->enum('type', ['agricultural', 'aquatic'])->default('agricultural'); // Type of equipment
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
