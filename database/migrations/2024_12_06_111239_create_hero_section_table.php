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
        Schema::create('hero_section_categories', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->string('slug')->unique();
            $table->string('route')->unique();
            $table->boolean('show_on_mainmenu')->default(false);
            $table->timestamps();
        });

        Schema::create('hero_section', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('hero_section_category_id')->constrained('hero_section_categories')->onDelete('cascade');
            $table->json('content')->nullable();
            $table->date('published_date')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });

        Schema::create('hero_section_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->json('name')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('hero_section_category_id')->constrained('hero_section_categories')->onDelete('cascade');
            $table->json('headline_text')->nullable();
            $table->timestamps();
        });

        Schema::create('hero_masters', function (Blueprint $table) {
            $table->id();
            $table->json('footer')->nullable();
            $table->json('ojk')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_section');
        Schema::dropIfExists('hero_section_sub_categories');
        Schema::dropIfExists('hero_section_categories');
        Schema::dropIfExists('hero_masters');
    }
};
