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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('company_name')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('password');
            $table->longText('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            $table->string('phone4')->nullable();
            $table->string('role')->nullable();
            $table->string('company_type')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('location_map')->nullable();
            $table->integer('allowed_posts')->default(20);
        
            $table->boolean('isVerified')->default(0);
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
