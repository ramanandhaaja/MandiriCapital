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
            $table->text('intro');
            $table->text('headline');
            $table->text('articletitle1');
            $table->text('articletitle2');
            $table->text('articletitle3');
            $table->text('article1');
            $table->text('article2');
            $table->text('article3');
            $table->string('icon_article1');
            $table->string('icon_article2');
            $table->string('icon_article3');
            $table->timestamps();
        });



        Schema::create('about_priority_sector', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('content')->nullable();
            $table->date('published_date')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });

        Schema::create('about_mandiri_ecosystem', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('content')->nullable();
            $table->date('published_date')->nullable();
            $table->string('image_path')->nullable();
            $table->boolean('is_domestic')->default(false);
            $table->boolean('is_international')->default(false);
            $table->boolean('is_headline')->default(false);
            $table->string('group')->nullable();
            $table->text('hover_focus_area')->nullable();
            $table->text('hover_content')->nullable();
            $table->timestamps();
        });


        Schema::create('about_team', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('job_group')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->date('published_date')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_priority_sector');
        Schema::dropIfExists('about_mandiri_ecosystem');
    }
};
