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
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path',255)->comment('Image file path');
            $table->string('alt_text',255)->nullable()->comment('Image alt text');
            $table->boolean('is_primary')->default(false)->comment('Primary image flag');
            $table->integer('sort_order')->default(0)->comment('Display order');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
