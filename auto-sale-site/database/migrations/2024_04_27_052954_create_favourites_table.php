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
        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');  // Ensures referential integrity
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Ensures referential integrity
            $table->timestamps();  // Tracks when entries are created or updated

            // Ensure that the combination of car_id and user_id is unique
            $table->unique(['car_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favourites');
    }
};
