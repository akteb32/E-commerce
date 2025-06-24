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
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',100)->comment('Recipient first name');
            $table->string('last_name',100)->comment('Recipient last name');
            $table->string('company',100)->comment('Company name')->nullable();
            $table->string('address_line_1',255)->comment('Address line 1');
            $table->string('address_line_2',255)->comment('Address line 2')->nullable();
            $table->string('city',100)->comment('city');
            $table->string('state',100)->comment('State/Province')->nullable();
            $table->string('postal_code',20)->comment('Postal code');
            $table->string('country',100)->comment('Country');
            $table->string('phone',20)->comment('Phone number')->nullable();

            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_addresses');
    }
};
