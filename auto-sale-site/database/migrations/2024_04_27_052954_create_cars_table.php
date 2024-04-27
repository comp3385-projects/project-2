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
        // Ensure the 'users' table exists before creating 'cars'
        if (!Schema::hasTable('users')) {
            throw new Exception('The required "users" table does not exist.');
        }

        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->text('description'); // Changed from string to text for potentially longer descriptions
            $table->string('make');
            $table->string('model');
            $table->string('colour');
            $table->year('year'); // Changed from string to year if you are sure the year will always be a valid year
            $table->string('transmission');
            $table->string('car_type');
            $table->decimal('price', 10, 2);
            $table->string('photo');
            $table->foreignId('user_id')->constrained(); // By default, it references 'users' table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
