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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->comment('Product name');
            $table->string('slug',255)->unique()->comment('URL-friendly product name')->index();
            $table->longText('description')->nullable()->comment('Product description');
            $table->text('short_description')->nullable()->comment('Brief product description');
            $table->string('sku',255)->unique()->comment('Stock Keeping Unit')->index();
            $table->decimal('price',10,2)->comment('Product regular price');
            $table->decimal('sale_price',10,2)->nullable()->comment('Product discounted price');
            $table->decimal('cost_price',10,2)->nullable()->comment('Product cost price');
            $table->integer('stock_quantity')->default(0)->comment('Available stock');
            $table->integer('min_quantity')->default(1)->comment('Minimum order quantity');
            $table->decimal('weight',8,2)->nullable()->comment('Product weight');
            $table->string('dimensions',255)->nullable()->comment('Product dimensions');
            $table->boolean('is_active')->default(true)->comment('Product status')->index();
            $table->boolean('is_featured')->default(false)->comment('Featured product flag')->index();
            $table->boolean('manage_stock')->default(true)->comment('Stock management flag');
            $table->enum('stock_status',['in_stock','out_of_stock','on_backorder'])->default('in_stock')->comment('Stock status');
            $table->string('image',255)->nullable()->comment('Main product image');
            $table->string('meta_title',255)->nullable()->comment('SEO meta title');
            $table->text('meta_description')->nullable()->comment('SEO meta description');
            $table->decimal('rating_average',2,1)->default(0.0)->comment('Average rating');
            $table->integer('rating_count')->default(0)->comment('Total ratings');

            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->index()->name('fk_products_category_id');
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade')->index()->name('fk_products_subcategory_id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
