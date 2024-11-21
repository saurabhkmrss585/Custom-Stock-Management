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
    Schema::create('sold_stocks', function (Blueprint $table) {
        $table->id();
        $table->date('saleDate');
        $table->json('products');
        $table->decimal('total_amount', 8, 2); // Add total_amount with decimal type
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sold_stocks');
    }
};
