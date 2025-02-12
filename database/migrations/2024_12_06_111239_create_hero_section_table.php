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
            $table->timestamps();
        });

        Schema::create('hero_section', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('slug')->unique();
            $table->foreignId('hero_section_category_id')->constrained('hero_section_categories')->onDelete('cascade');
            $table->json('content');
            $table->date('published_date');
            $table->string('image_path');
            $table->timestamps();
        });

        Schema::create('hero_section_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->string('slug')->unique();
            $table->foreignId('hero_section_category_id')->constrained('hero_section_categories')->onDelete('cascade');
            $table->json('headline_text');
            $table->timestamps();
        });

        Schema::create('hero_masters', function (Blueprint $table) {
            $table->id();
            $table->string('footer');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('email_form');
            $table->string('email_contact');
            $table->string('email_customer_report');
            $table->string('phone');
            $table->string('address');
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
        Schema::dropIfExists('hero_section_sub_categories');
        Schema::dropIfExists('hero_masters');
    }
};
