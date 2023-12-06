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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->string('orderID');
            $table->foreign('orderID')->references('orderID')->on('order_infos')->onDelete('cascade');
            $table->string('product_name');
            $table->decimal('product_price', 10, 2);
            $table->integer('order_quantity');
            $table->string('productID');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
