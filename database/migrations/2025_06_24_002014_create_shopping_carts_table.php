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
        Schema::create('shopping_carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('quantity')->check('quantity >= 1')->comment('Item quantity');
            $table->decimal('price',10,2)->comment('Item price at time of adding');
            $table->decimal('total',10,2)->comment('Total price (quantity * price)');


            $table->foreignId('user_id')->constrained()->onDelete('cascade')->index()->name('fk_shopping_carts_user_id');
            $table->foreignId('product_id')->constrained()->onDelete('cascade')->index()->name('fk_shopping_carts_product_id');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_carts');
    }
};
