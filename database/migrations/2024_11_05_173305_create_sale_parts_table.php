<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sale_parts', function (Blueprint $table) {
            $table->id();
            $table->date('saleDate');
            $table->json('products');
            $table->decimal('total_price', 8, 2); // Field to store total sale price
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_parts');
    }
};
