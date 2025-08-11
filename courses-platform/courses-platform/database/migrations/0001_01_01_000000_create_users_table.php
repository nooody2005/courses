<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // In ..._create_users_table.php
public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('username')->unique();
        $table->string('email')->unique();
        $table->string('profile_picture')->nullable(); // <-- Add this line
        $table->timestamp('email_verified_at')->nullable();
        $table->string('phone');
        $table->date('date_of_birth');
        $table->string('country');
        $table->string('password');
        $table->enum('role', ['user', 'admin'])->default('user');
        $table->rememberToken();
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