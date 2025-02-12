<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('portfolio_categories', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('portfolio_category_id')->constrained()->onDelete('cascade');
            $table->json('description')->nullable();
            $table->json('stage')->nullable();
            $table->string('website_url')->nullable();
            $table->string('image_path')->nullable();
            $table->string('highlight_image')->nullable();
            $table->string('icon')->nullable();
            $table->string('ceo_name')->nullable();
            $table->string('year_invested')->nullable();
            $table->json('sector')->nullable();
            $table->json('head_office')->nullable();
            $table->integer('order')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
        Schema::dropIfExists('portfolio_categories');
    }
};
