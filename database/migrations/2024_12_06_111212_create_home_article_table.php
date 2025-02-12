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
        Schema::create('home_article', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('content');
            $table->json('sub_content')->nullable();
            $table->date('published_date');
            $table->timestamps();
        });

        Schema::create('home_headline', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('category')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('image_path')->nullable();
            $table->string('link_url')->nullable();
            $table->string('type')->nullable();
            $table->string('position')->nullable();
            $table->date('published_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_article');
        Schema::dropIfExists('home_headline');
    }
};
