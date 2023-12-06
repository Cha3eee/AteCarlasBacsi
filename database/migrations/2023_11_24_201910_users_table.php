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
            $table->string('userID');
            $table->string('user_FirstName');
            $table->string('user_LastName');
            $table->string('user_Gender');
            $table->string('user_Birthdate');
            $table->string('user_Age');
            $table->string('user_Address');
            $table->string('user_PhoneNum');
            $table->string('user_Email')->unique();
            $table->string('user_VCode')->nullable();
            $table->rememberToken();
            $table->string('user_Username')->unique();
            $table->string('user_Password');
            $table->timestamps();
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

