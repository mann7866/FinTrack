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
        Schema::create('finance_logs', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_date');
            $table->enum('type',['expense','income']);
            $table->enum('payment_method',['cash','non_cash']);
            $table->string('description');
            $table->string('nominal');
            $table->foreignId('category_id')->constrained('categories')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_logs');
    }
};
