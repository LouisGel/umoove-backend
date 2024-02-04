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
        Schema::create('movement_temps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('activity_id')->constrained();
            $table->decimal('longitude', 9, 6);
            $table->decimal('latitude', 9, 6);
            $table->date('date_prise');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movement_temps');
    }
};
