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
        Schema::create('home_profile_company', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('name')->nullable();
            $table->json('title')->nullable();
            $table->json('content')->nullable();
            $table->date('published_date')->nullable();
            $table->string('image_path')->nullable();
            $table->string('company_image_path')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_profile_company');
    }
};
