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
    Schema::create('users', function (Blueprint $table) {
        $table->id();

        // User basic info
        $table->string('name');
        $table->string('username')->unique()->nullable();
        $table->string('email')->unique();

        // Phone
        $table->string('phone')->nullable();

        $table->timestamp('email_verified_at')->nullable();

        // Password
        $table->string('password');

        // Profile Image
        $table->string('profile_image')->nullable();

        // Role
        $table->enum('role', ['user', 'admin'])->default('user');

        // OTP Login System
        $table->string('otp')->nullable();
        $table->timestamp('otp_expires_at')->nullable();

        $table->rememberToken();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('users');
}

};
