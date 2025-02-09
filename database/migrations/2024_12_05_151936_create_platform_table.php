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
        Schema::create('platform_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content')->nullable();
            $table->date('published_date');
            $table->string('image_path');
            $table->foreignId('platform_category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('platform_counter', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('content');
            $table->timestamps();
        });

        Schema::create('platform_article', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('content');
            $table->timestamps();
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platforms');
        Schema::dropIfExists('platform_categories');
        Schema::dropIfExists('platform_counter');
        Schema::dropIfExists('platform_article');
    }
};
