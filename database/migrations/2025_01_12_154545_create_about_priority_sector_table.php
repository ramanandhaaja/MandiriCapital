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

        Schema::create('about_mci_intro', function (Blueprint $table) {
            $table->id();
            $table->json('intro');
            $table->json('headline');
            $table->json('articletitle1');
            $table->json('articletitle2');
            $table->json('articletitle3');
            $table->json('article1');
            $table->json('article2');
            $table->json('article3');
            $table->string('icon_article1');
            $table->string('icon_article2');
            $table->string('icon_article3');
            $table->timestamps();
        });

        Schema::create('about_priority_sector', function (Blueprint $table) {
            $table->id();
            $table->json('main_title');
            $table->json('title')->nullable();
            $table->text('slug')->nullable();
            $table->date('published_date')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });

        Schema::create('about_mandiri_ecosystem_categories', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::create('about_mandiri_ecosystem', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->text('slug')->nullable();
            $table->json('content')->nullable();
            $table->date('published_date')->nullable();
            $table->string('image_path')->nullable();
            $table->boolean('is_domestic')->default(false);
            $table->boolean('is_international')->default(false);
            $table->boolean('is_headline')->default(false);
            $table->json('hover_focus_area')->nullable();
            $table->json('hover_content')->nullable();
            $table->foreignId('about_ecosystem_category_id')->constrained('about_mandiri_ecosystem_categories')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('about_team_headlines', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('content')->nullable();
            $table->timestamps();
        });

        Schema::create('about_team_categories', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::create('about_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->json('title')->nullable();
            $table->date('published_date')->nullable();
            $table->string('image_path')->nullable();
            $table->foreignId('about_team_category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_mci_intro');
        Schema::dropIfExists('about_priority_sector');
        Schema::dropIfExists('about_mandiri_ecosystem_categories');
        Schema::dropIfExists('about_mandiri_ecosystem');
        Schema::dropIfExists('about_team_categories');
        Schema::dropIfExists('about_teams');
    }
};
