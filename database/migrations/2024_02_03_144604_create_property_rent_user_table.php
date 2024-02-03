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
        Schema::create('property_rent_user', function (Blueprint $table) {
            $table->unique(['property_rent_id', 'user_id']);
            $table->unsignedBigInteger('property_rent_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('rate')->default(5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_rent_user');
    }
};
