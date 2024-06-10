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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('position')->nullable();
            $table->string('salary')->nullable();
            $table->string('years_of_exp')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('image')->nullable();
            $table->string('department')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
