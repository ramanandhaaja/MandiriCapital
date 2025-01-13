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
            $table->string('title');
            $table->text('content')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('portfolio_funding_articles_sub', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')
                  ->constrained('portfolio_funding_articles')
                  ->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->boolean('is_large')->default(false);
            $table->string('image_path')->nullable(); // For storing icon reference
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0); // To maintain display order
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_funding_articles_sub');
        Schema::dropIfExists('portfolio_funding_articles');
    }
};
