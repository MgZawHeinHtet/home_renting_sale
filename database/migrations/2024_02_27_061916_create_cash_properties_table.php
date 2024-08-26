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
        Schema::create('cash_properties', function (Blueprint $table) {
            $table->id();
            $table->string('payment_type');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('billing_number')->nullable();
            $table->string('photo')->nullable();
            $table->string('status')->default('pending');
            $table->string('property_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('agent_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_properties');
    }
};
