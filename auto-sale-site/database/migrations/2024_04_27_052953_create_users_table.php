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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 255)->unique(); // Specified length for clarity
            $table->string('password', 255); // Specified length for consistency
            $table->string('name', 100)->nullable(); // Define a reasonable max length for name
            $table->string('location', 100)->nullable(); // Define a reasonable max length for location
            $table->text('biography')->nullable(); // Appropriate for longer, variable-length text
            $table->string('photo', 255)->nullable(); // Define max length, assuming storage of URL/path
            $table->timestamps(); // Automatically creates 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
