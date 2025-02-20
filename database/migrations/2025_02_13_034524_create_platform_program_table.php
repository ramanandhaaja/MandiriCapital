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
            $table->json('hero_text')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('hero_background')->nullable();
            $table->json('headline')->nullable();
            $table->json('counter1_title')->nullable();
            $table->json('counter2_title')->nullable();
            $table->json('counter3_title')->nullable();
            $table->json('counter1_value')->nullable();
            $table->json('counter2_value')->nullable();
            $table->json('counter3_value')->nullable();
            $table->json('whyexponent_title')->nullable();
            $table->json('whyexponent_subtitle')->nullable();
            $table->string('whyexponent_icon1')->nullable();
            $table->string('whyexponent_icon2')->nullable();
            $table->string('whyexponent_icon3')->nullable();
            $table->string('whyexponent_icon4')->nullable();
            $table->string('whyexponent_icon5')->nullable();
            $table->string('whyexponent_icon6')->nullable();
            $table->json('whyexponent_title1')->nullable();
            $table->json('whyexponent_title2')->nullable();
            $table->json('whyexponent_title3')->nullable();
            $table->json('whyexponent_title4')->nullable();
            $table->json('whyexponent_title5')->nullable();
            $table->json('whyexponent_title6')->nullable();
            $table->json('whyexponent_content1')->nullable();
            $table->json('whyexponent_content2')->nullable();
            $table->json('whyexponent_content3')->nullable();
            $table->json('whyexponent_content4')->nullable();
            $table->json('whyexponent_content5')->nullable();
            $table->json('whyexponent_content6')->nullable();
            $table->json('insideexponent_title')->nullable();
            $table->json('insideexponent_subtitle')->nullable();
            $table->string('insideexponent_icon1')->nullable();
            $table->string('insideexponent_icon2')->nullable();
            $table->json('insideexponent_title1')->nullable();
            $table->json('insideexponent_title2')->nullable();
            $table->json('insideexponent_content1')->nullable();
            $table->json('insideexponent_content2')->nullable();

            $table->string('image_path1')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
            $table->string('image_path4')->nullable();
            $table->string('image_path5')->nullable();
            $table->json('testimonialexponent_title')->nullable();
            $table->json('testimonialexponent_subtitle')->nullable();
            $table->string('testimonialexponent_logo1')->nullable();
            $table->string('testimonialexponent_logo2')->nullable();
            $table->string('testimonialexponent_logo3')->nullable();
            $table->string('testimonialexponent_logo4')->nullable();
            $table->string('testimonialexponent_logo5')->nullable();
            $table->string('testimonialexponent_logo6')->nullable();
            $table->string('testimonialexponent_founder1')->nullable();
            $table->string('testimonialexponent_founder2')->nullable();
            $table->string('testimonialexponent_founder3')->nullable();
            $table->string('testimonialexponent_founder4')->nullable();
            $table->string('testimonialexponent_founder5')->nullable();
            $table->string('testimonialexponent_founder6')->nullable();
            $table->json('testimonialexponent_title1')->nullable();
            $table->json('testimonialexponent_title2')->nullable();
            $table->json('testimonialexponent_title3')->nullable();
            $table->json('testimonialexponent_title4')->nullable();
            $table->json('testimonialexponent_title5')->nullable();
            $table->json('testimonialexponent_title6')->nullable();
            $table->json('testimonialexponent_content1')->nullable();
            $table->json('testimonialexponent_content2')->nullable();
            $table->json('testimonialexponent_content3')->nullable();
            $table->json('testimonialexponent_content4')->nullable();
            $table->json('testimonialexponent_content5')->nullable();
            $table->json('testimonialexponent_content6')->nullable();
            $table->json('footer_text');
            $table->timestamps();
        });

        Schema::create('platform_value_creation_yaxis', function (Blueprint $table) {
            $table->id();
            $table->json('hero_text')->nullable();
            $table->string('hero_image')->nullable();
            $table->json('headline')->nullable();
            $table->json('footer_text')->nullable();
            $table->string('image_path1')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
            $table->string('image_path4')->nullable();
            $table->string('image_path5')->nullable();
            $table->timestamps();
        });


        Schema::create('platform_value_creation_zenith', function (Blueprint $table) {
            $table->id();
            $table->json('hero_text')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('hero_background')->nullable();
            $table->json('headline')->nullable();
            $table->json('whyzenith_title')->nullable();
            $table->json('whyzenith_subtitle')->nullable();
            $table->string('whyzenith_icon1')->nullable();
            $table->string('whyzenith_icon2')->nullable();
            $table->string('whyzenith_icon3')->nullable();
            $table->string('whyzenith_icon4')->nullable();
            $table->string('whyzenith_icon5')->nullable();
            $table->string('whyzenith_icon6')->nullable();
            $table->json('whyzenith_title1')->nullable();
            $table->json('whyzenith_title2')->nullable();
            $table->json('whyzenith_title3')->nullable();
            $table->json('whyzenith_title4')->nullable();
            $table->json('whyzenith_title5')->nullable();
            $table->json('whyzenith_title6')->nullable();
            $table->json('whyzenith_content1')->nullable();
            $table->json('whyzenith_content2')->nullable();
            $table->json('whyzenith_content3')->nullable();
            $table->json('whyzenith_content4')->nullable();
            $table->json('whyzenith_content5')->nullable();
            $table->json('whyzenith_content6')->nullable();
            $table->json('insidezenith_title')->nullable();
            $table->json('insidezenith_subtitle')->nullable();;

            $table->string('insidezenith_icon1')->nullable();
            $table->string('insidezenith_icon2')->nullable();
            $table->string('insidezenith_icon3')->nullable();
            $table->json('insidezenith_title1')->nullable();
            $table->json('insidezenith_title2')->nullable();
            $table->json('insidezenith_title3')->nullable();
            $table->json('insidezenith_content1')->nullable();
            $table->json('insidezenith_content2')->nullable();
            $table->json('insidezenith_content3')->nullable();
            $table->json('deal_title')->nullable();
            $table->string('deal_image_path1')->nullable();
            $table->string('deal_image_path2')->nullable();
            $table->string('deal_image_path3')->nullable();
            $table->string('deal_image_path4')->nullable();
            $table->string('deal_image_path5')->nullable();
            $table->string('deal_image_path6')->nullable();
            $table->string('image_path1')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
            $table->string('image_path4')->nullable();
            $table->string('image_path5')->nullable();
            $table->json('testimonialzenith_title')->nullable();
            $table->json('testimonialzenith_subtitle')->nullable();
            $table->string('testimonialzenith_logo1')->nullable();
            $table->string('testimonialzenith_logo2')->nullable();
            $table->string('testimonialzenith_logo3')->nullable();
            $table->string('testimonialzenith_logo4')->nullable();
            $table->string('testimonialzenith_logo5')->nullable();
            $table->string('testimonialzenith_logo6')->nullable();
            $table->string('testimonialzenith_founder1')->nullable();
            $table->string('testimonialzenith_founder2')->nullable();
            $table->string('testimonialzenith_founder3')->nullable();
            $table->string('testimonialzenith_founder4')->nullable();
            $table->string('testimonialzenith_founder5')->nullable();
            $table->string('testimonialzenith_founder6')->nullable();
            $table->json('testimonialzenith_title1')->nullable();
            $table->json('testimonialzenith_title2')->nullable();
            $table->json('testimonialzenith_title3')->nullable();
            $table->json('testimonialzenith_title4')->nullable();
            $table->json('testimonialzenith_title5')->nullable();
            $table->json('testimonialzenith_title6')->nullable();
            $table->json('testimonialzenith_content1')->nullable();
            $table->json('testimonialzenith_content2')->nullable();
            $table->json('testimonialzenith_content3')->nullable();
            $table->json('testimonialzenith_content4')->nullable();
            $table->json('testimonialzenith_content5')->nullable();
            $table->json('testimonialzenith_content6')->nullable();
            $table->json('footer_text')->nullable();
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
