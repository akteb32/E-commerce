<?php

use Dom\Comment;
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
            $table->string('name')->comment('Users full name');
            $table->string('phone',20)->nullable()->comment('Users phone number');
            $table->text('address')->nullable()->comment('Users address');
            $table->string('city',100)->nullable()->comment('Users city');
            $table->string('postal_code',20)->nullable()->comment('Users postal code');
            $table->string('country',20)->nullable()->comment('Users country');
            $table->string('avatar',255)->nullable()->comment('Profile picture path');
            $table->boolean('is_active')->default(true)->comment('Account status')->index();
            $table->string('email')->unique()->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
