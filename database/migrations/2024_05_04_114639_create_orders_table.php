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
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('street_name')->nullable();
            $table->string('building_name_no')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(); // Changed to unsignedBigInteger
            $table->string('product_title')->nullable();
            $table->unsignedBigInteger('product_id')->nullable(); // Changed to unsignedBigInteger
            $table->integer('quantity')->nullable(); // Changed to integer
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('name_on_card')->nullable();
            $table->string('credit_card_number')->nullable();
            $table->string('expiration_date')->nullable();
            $table->string('cvv')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('order_status')->nullable();
            $table->date('delivery_date')->nullable();
            $table->decimal('price', 8, 2)->nullable(); // Changed to decimal
            $table->decimal('orderTotal', 8, 2)->nullable(); // Changed to decimal
            $table->decimal('total_price', 8, 2)->nullable(); // Adding total_price column
            $table->string('image')->nullable();
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
