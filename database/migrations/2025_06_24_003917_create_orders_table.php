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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique()->comment('Order number')->index();
            $table->enum('status',['pending','processing','shipped','delivered','cancelled','refunded'])->default('pending')->comment('Order status')->index();
            $table->decimal('total_amount',10,2)->comment('Total order amount');
            $table->decimal('tax_amount',10,2)->default(0.00)->comment('Tax amount');
            $table->decimal('shipping_amount',10,2)->default(0.00)->comment('Shipping cost');
            $table->decimal('discount_amount',10,2)->default(0.00)->comment('Discount amount');
            $table->string('currency',3)->default('USD')->comment('Currency code');
            $table->enum('payment_status',['pending','paid','failed','refunded'])->default('pending')->comment('Payment status');
            $table->string('payment_method',50)->nullable()->comment('Payment method');
            $table->text('notes')->nullable()->comment('Order notes');
            $table->timestamp('shipped_at')->nullable()->comment('Shipping timestamp');
            $table->timestamp('delivered_at')->nullable()->comment('Delivery timestamp');

            $table->foreignId('user_id')->constrained()->onDelete('cascade')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
