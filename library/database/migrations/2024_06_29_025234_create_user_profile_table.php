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
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->string('student_number')->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('birth_date');
            $table->string('address');
            $table->string('contact_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
