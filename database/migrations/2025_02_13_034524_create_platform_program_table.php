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
        Schema::create('platform_value_creation_xponent', function (Blueprint $table) {
            $table->id();
            $table->json('hero_text');
            $table->string('hero_image');
            $table->string('hero_background');
            $table->json('headline');
            $table->json('counter1_title');
            $table->json('counter2_title');
            $table->json('counter3_title');
            $table->json('counter1_value');
            $table->json('counter2_value');
            $table->json('counter3_value');
            $table->json('whyexponent_title');
            $table->json('whyexponent_subtitle');
            $table->json('insideexponent_title');
            $table->json('insideexponent_subtitle');
            $table->string('image_path1');
            $table->string('image_path2');
            $table->string('image_path3');
            $table->string('image_path4');
            $table->string('image_path5');
            $table->json('testimonialexponent_title');
            $table->json('testimonialexponent_subtitle');
            $table->json('footer_text');
            $table->timestamps();
        });

        Schema::create('platform_value_creation_yaxis', function (Blueprint $table) {
            $table->id();
            $table->json('hero_text');
            $table->string('hero_image');
            $table->json('headline');
            $table->json('footer_text');
            $table->string('image_path1');
            $table->string('image_path2');
            $table->string('image_path3');
            $table->timestamps();
        });


        Schema::create('platform_value_creation_zenith', function (Blueprint $table) {
            $table->id();
            $table->json('hero_text');
            $table->string('hero_image');
            $table->string('hero_background');
            $table->json('headline');
            $table->json('whyzenith_title');
            $table->json('whyzenith_subtitle');
            $table->json('insidezenith_title');
            $table->json('insidezenith_subtitle');
            $table->json('deal_title');
            $table->string('deal_image_path1');
            $table->string('deal_image_path2');
            $table->string('deal_image_path3');
            $table->string('deal_image_path4');
            $table->string('deal_image_path5');
            $table->string('deal_image_path6');
            $table->string('image_path1');
            $table->string('image_path2');
            $table->string('image_path3');
            $table->string('image_path4');
            $table->string('image_path5');
            $table->json('testimonialzenith_title');
            $table->json('testimonialzenith_subtitle');
            $table->json('footer_text');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platform_value_creation_xponent');
        Schema::dropIfExists('platform_value_creation_yaxis');
        Schema::dropIfExists('platform_value_creation_zenith');
    }
};
