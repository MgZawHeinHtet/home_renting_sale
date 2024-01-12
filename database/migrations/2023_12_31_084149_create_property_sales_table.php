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
        Schema::create('property_sales', function (Blueprint $table) {
            $table->id();
            $table->string('propertyNumber');
            $table->string('title');
            $table->string('type');
            $table->string('floor')->nullable();
            $table->double('price');
            $table->double('pricePerSqrt')->nullable();
            $table->double('pricePerAcre')->nullable();
            $table->string('installment')->nullable();
            $table->string('areaType');
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('area')->nullable();
            $table->string('areaUnit')->nullable();
            $table->string('furnished')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('region');
            $table->string('township');
            $table->string('phoneNumber');
            $table->longText('description');
            $table->string('map');
            $table->string('location')->nullable();
            $table->integer('view')->default(0);
            $table->integer('clickView')->default(0);
            $table->integer('enquiry')->default(0);
            $table->boolean('isSold')->default(0);
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_sales');
    }
};
