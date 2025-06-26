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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->comment('Subcategory name');
            $table->string('slug',255)->unique()->comment('URL-friendly subcategory name')->index();
            $table->text('description')->nullable()->comment('Subcategory description');
            $table->string('image',255)->nullable()->comment('Subcategory image path');
            $table->boolean('is_active')->default(true)->comment('Subcategory status')->index();
            $table->integer('sort_order')->default(0)->comment('Display order')->index();
            $table->string('meta_title',255)->nullable()->comment('SEO meta title');
            $table->text('meta_description')->nullable()->comment('SEO meta description');
            
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->index();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
