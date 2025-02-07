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
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('hero_section', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('hero_section_category_id')->constrained('hero_section_categories')->onDelete('cascade');
            $table->text('content');
            $table->date('published_date');
            $table->string('image_path');
            $table->timestamps();
        });

        Schema::create('hero_section_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('hero_section_category_id')->constrained('hero_section_categories')->onDelete('cascade');
            $table->string('headline_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_section_categories');
        Schema::dropIfExists('hero_section');
    }
};
