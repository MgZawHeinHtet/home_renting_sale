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
        Schema::table('property_rents', function (Blueprint $table) {
            $table->integer('rating')->default(5)->after('check_out');
            $table->integer('avg_rating')->default(5)->after('check_out');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('property_rents', function (Blueprint $table) {
            $table->dropColumn('rating');
            $table->dropColumn('avg_rating');
        });
    }
};
