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
        Schema::create('credit_transcations', function (Blueprint $table) {
            $table->id();
            $table->string('acc_name');
            $table->string('transcation_photo');
            $table->string('status')->default('pending');
            $table->integer('transcation_price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('credit_package_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_transcations');
    }
};
