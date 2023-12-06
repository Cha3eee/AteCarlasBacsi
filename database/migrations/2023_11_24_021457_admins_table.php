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
        Schema::create('admins', function(Blueprint $table){
            $table->id();
            $table->string('adminID')->unique();
            $table->string('admin_FirstName');
            $table->string('admin_LastName');
            $table->string('admin_Gender');
            $table->date('admin_Birthdate');
            $table->string('admin_Age');
            $table->string('admin_Email');
            $table->string('admin_PhoneNum');
            $table->string('admin_Username')->unique();
            $table->string('admin_Password');
            $table->timestamps();
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
