<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 255)->comment('Product name at time of order');
            $table->string('product_sku', 100)->comment('Product SKU at time of order');
            $table->integer('quantity')->comment('Item quantity');
            $table->decimal('price', 10, 2)->comment('Item price at time of order');
            $table->decimal('total', 10, 2)->comment('Total price = quantity * price');

            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
