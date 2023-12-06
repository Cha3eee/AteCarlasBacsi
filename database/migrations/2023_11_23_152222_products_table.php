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
        Schema::create('products', function(Blueprint $table)
        {
            $table->id();
           $table->string('productID')->unique();
           $table->string('product_name');
           $table->string('product_category');
           $table->decimal('product_price', 8, 2);
           $table->integer('product_quantity');
           $table->text('product_desc');
           $table->binary('product_image')->nullable();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
