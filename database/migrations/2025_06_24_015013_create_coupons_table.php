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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code',50)->unique()->comment('Coupon code');
            $table->enum('type',['fixed','percentage'])->comment('Discount type');
            $table->decimal('value',10,2)->comment('Discount value');
            $table->decimal('minimum_amount',10,2)->nullable()->comment('Minimum order amount');
            $table->integer('usage_limit')->nullable()->comment('Usage limit');
            $table->integer('used_count')->default(0)->comment('Times used');
            $table->boolean('is_active')->default(true)->comment('Coupon status');
            $table->timestamp('starts_at')->nullable()->comment('Coupon start date');
            $table->timestamp('expires_at')->nullable()->comment('Coupon expiry date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
