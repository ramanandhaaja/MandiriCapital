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
        Schema::create('home_email_startup', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('subtitle');
            $table->json('firstname');
            $table->json('lastname');
            $table->json('email');
            $table->json('phone');
            $table->json('company');
            $table->json('website_url');
            $table->json('business_sector');
            $table->json('upload');
            $table->json('cancel');
            $table->json('submit');
            $table->timestamps();
        });

        Schema::create('home_email_investor', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('subtitle');
            $table->json('fullname');
            $table->json('subject');
            $table->json('email');
            $table->json('phone');
            $table->json('company');
            $table->json('message');
            $table->json('cancel');
            $table->json('submit');
            $table->timestamps();
        });


        Schema::create('portfolio_email_startup', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('subtitle');
            $table->json('firstname');
            $table->json('lastname');
            $table->json('email');
            $table->json('phone');
            $table->json('company');
            $table->json('website_url');
            $table->json('business_sector');
            $table->json('instructions');
            $table->json('upload');
            $table->json('cancel');
            $table->json('submit');
            $table->timestamps();
        });


        Schema::create('portfolio_email_investor', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('subtitle');
            $table->json('fullname');
            $table->json('subject');
            $table->json('email');
            $table->json('phone');
            $table->json('company');
            $table->json('message');
            $table->json('cancel');
            $table->json('submit');
            $table->timestamps();
        });

        Schema::create('contact_email', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('position1');
            $table->json('position2');
            $table->json('position3');
            $table->json('name');
            $table->json('subject');
            $table->json('email');
            $table->json('startup_category');
            $table->json('company');
            $table->json('problem');
            $table->json('solution');
            $table->json('proposition');
            $table->json('upload');
            $table->json('instructions');
            $table->json('message');
            $table->json('cancel');
            $table->json('submit');
            $table->timestamps();
        });

        Schema::create('publication_email', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('image_url');
            $table->json('name');
            $table->json('email');
            $table->json('company');
            $table->json('job');
            $table->json('cancel');
            $table->json('submit');
            $table->timestamps();
        });


        Schema::create('platform_email', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('subtitle');
            $table->json('program');
            $table->json('mandiri_ecosystem');
            $table->json('firstname');
            $table->json('lastname');
            $table->json('email');
            $table->json('phone');
            $table->json('company');
            $table->json('website_url');
            $table->json('business_sector');
            $table->json('instructions');
            $table->json('upload');
            $table->json('cancel');
            $table->json('submit');
            $table->timestamps();
        });


        Schema::create('platform_email_zenith', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('headline1');
            $table->json('email');
            $table->json('company');
            $table->json('website_url');
            $table->json('fullname');
            $table->json('linkedin');
            $table->json('whatsapp');
            $table->json('headline2');
            $table->json('which_zenith');
            $table->json('which_sector');
            $table->json('description');
            $table->json('revenue');
            $table->json('established');
            $table->json('employee');
            $table->json('is_indonesian');
            $table->json('cancel');
            $table->json('submit');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_email_startup');
        Schema::dropIfExists('home_email_investor');
        Schema::dropIfExists('portfolio_email_startup');
        Schema::dropIfExists('portfolio_email_investor');
        Schema::dropIfExists('contact_email');
        Schema::dropIfExists('publication_email');
        Schema::dropIfExists('platform_email');
        Schema::dropIfExists('platform_email_zenith');
    }
};
