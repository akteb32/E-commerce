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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->comment('Category name');
            $table->string('slug',255)->unique()->comment('URL-friendly category name')->index();
            $table->text('description')->nullable()->comment('Category description');
            $table->string('image')->nullable()->comment('Category image path');
            $table->boolean('is_active')->default(true)->comment('Category status')->index();
            $table->integer('sort_order')->default(0)->comment('Display order')->index();
            $table->string('meta_title',255)->nullable()->comment('SEO meta title');
            $table->text('meta_description')->nullable()->comment('SEO meta description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
