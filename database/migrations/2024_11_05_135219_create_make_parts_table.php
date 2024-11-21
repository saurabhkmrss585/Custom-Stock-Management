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
        Schema::create('make_parts', function (Blueprint $table) {
            $table->id();
            $table->string('part_name', 50);
            $table->bigInteger('part_quantity');
            $table->decimal('part_price', 10, 2);
            $table->json('product_name'); // Product names
            $table->json('products'); // Store products sold in JSON format
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('make_parts');
    }
};
