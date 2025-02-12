<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_funding_articles', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('content')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('portfolio_funding_articles_sub', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')
                  ->constrained('portfolio_funding_articles')
                  ->onDelete('cascade');
            $table->json('title');
            $table->json('about_title');
            $table->json('about_content_front');
            $table->json('about_content')->nullable();
            $table->json('investment_thesis_title')->nullable();
            $table->json('investment_thesis_content')->nullable();
            $table->json('investment_criteria_title')->nullable();
            $table->boolean('is_large')->default(false);
            $table->string('image_path')->nullable(); // For storing icon reference
            $table->json('headline_title')->nullable();
            $table->string('headline_url')->nullable();
            $table->json('investor_title')->nullable();
            $table->string('investor1_url')->nullable();
            $table->string('investor2_url')->nullable();
            $table->string('investor3_url')->nullable();
            $table->string('investor4_url')->nullable();
            $table->string('investor5_url')->nullable();
            $table->string('investor6_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0); // To maintain display order
            $table->json('stage')->nullable();
            $table->json('geography')->nullable();
            $table->json('ticketsize')->nullable();
            $table->timestamps();
        });


    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_funding_articles_sub');
        Schema::dropIfExists('portfolio_funding_articles');
    }
};
