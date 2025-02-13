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
        Schema::table('vegetables', function (Blueprint $table) {
            //
            $table->string('best_time_to_plant')->after('description')->nullable();
            $table->string('best_time_to_harvest')->after('best_time_to_plant')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vegetables', function (Blueprint $table) {
            //
            Schema::dropColumns(['best_time_to_plant', 'best_time_to_harvest',]);
        });
    }
};
