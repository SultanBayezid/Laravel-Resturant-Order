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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // If you want to associate carts with users
            $table->unsignedBigInteger('menu_id');
            $table->integer('quantity');
            $table->boolean('is_takeaway')->default(false); // Add a column to indicate whether the item is for takeaway
            $table->string('special_requests')->nullable(); // Add a column for special instructions or requests
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
