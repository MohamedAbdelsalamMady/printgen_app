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
        Schema::create('a_i_orders', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('customer_name')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('image_url');
            $table->string('width')->default('512');
            $table->string('height')->default('512');
            $table->string('size')->default('small');
            $table->string('category')->nullable();
            $table->string('status')->nullable();
            $table->string('version')->default('standard');
            $table->string('order_status')->nullable();
            $table->decimal('price', 8, 2)->nullable(); // Changed to decimal
            $table->decimal('orderTotal', 8, 2)->nullable(); // Changed to decimal
            $table->decimal('total_price', 8, 2)->nullable(); // Adding total_price column
            $table->unsignedBigInteger('order_id')->nullable(); // Changed to unsignedBigInteger
            $table->unsignedBigInteger('product_id')->nullable(); // Changed to unsignedBigInteger
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(); // Changed to unsignedBigInteger
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_i_orders');
    }
};
