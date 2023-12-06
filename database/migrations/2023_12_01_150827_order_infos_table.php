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
        Schema::create('order_infos', function (Blueprint $table) {
            $table->id();
            $table->string('orderID')->unique();
            $table->string('userID');
            $table->string('user_FirstName');
            $table->string('user_LastName');
            $table->string('user_Address');
            $table->string('user_Email');
            $table->string('user_PhoneNum');
            $table->string('order_Status');
            $table->string('order_TotalAmount');
            $table->string('order_DeliveryInstructions');
            $table->date('order_DeliveryDate');
            $table->time('order_DeliveryTime');
            $table->string('order_PaymentMode');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_infos');
    }
};
