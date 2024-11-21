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
        Schema::create('add_stocks', function (Blueprint $table) {
            $table->id();
            $table->string('productName',50);
            $table->string('productType',50);
            $table->string('partNumber',50);
            $table->bigInteger('quantity');
            $table->decimal('price',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_stocks');
    }
};
