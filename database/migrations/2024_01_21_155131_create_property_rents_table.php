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
        Schema::create('property_rents', function (Blueprint $table) {
            $table->id();
            $table->string('property_number')->unique();
            $table->string('title');
            $table->string('state');
            $table->string('township');
            $table->string('category');
            $table->string('price');
            $table->string('people');
            $table->string('map');
            $table->double('area');
            $table->string('area_unit');
            $table->integer('bathroom');
            $table->integer('bedroom');
            $table->longText('description');
            $table->json('amenities')->nullable();
            $table->json('house_rules')->nullable();
            $table->string('nearby')->nullable();
            $table->string('check_in');
            $table->string('check_out');
            $table->unsignedBigInteger('agent_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_rents');
    }
};
