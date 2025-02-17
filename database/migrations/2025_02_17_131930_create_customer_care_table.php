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
        Schema::create('customer_care', function (Blueprint $table) {
            $table->id();
            $table->json('customer_care_title')->nullable();
            $table->json('customer_care_subtitle')->nullable();
            $table->string('customer_care_icon1')->nullable();
            $table->string('customer_care_icon2')->nullable();
            $table->string('customer_care_icon3')->nullable();
            $table->string('customer_care_icon4')->nullable();
            $table->string('customer_care_icon5')->nullable();
            $table->string('customer_care_icon6')->nullable();
            $table->json('customer_care_title1')->nullable();
            $table->json('customer_care_title2')->nullable();
            $table->json('customer_care_title3')->nullable();
            $table->json('customer_care_title4')->nullable();
            $table->json('customer_care_title5')->nullable();
            $table->json('customer_care_title6')->nullable();
            $table->json('customer_care_content1')->nullable();
            $table->json('customer_care_content2')->nullable();
            $table->json('customer_care_content3')->nullable();
            $table->json('customer_care_content4')->nullable();
            $table->json('customer_care_content5')->nullable();
            $table->json('customer_care_content6')->nullable();
            $table->timestamps();
        });

        Schema::create('customer_care_how', function (Blueprint $table) {
            $table->id();
            $table->json('customer_care_title')->nullable();
            $table->string('customer_care_icon1')->nullable();
            $table->string('customer_care_icon2')->nullable();
            $table->string('customer_care_icon3')->nullable();
            $table->string('customer_care_icon4')->nullable();
            $table->json('customer_care_title1')->nullable();
            $table->json('customer_care_title2')->nullable();
            $table->json('customer_care_title3')->nullable();
            $table->json('customer_care_title4')->nullable();
            $table->string('customer_care_content1')->nullable();
            $table->string('customer_care_content2')->nullable();
            $table->string('customer_care_content3')->nullable();
            $table->string('customer_care_content4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_care');
        Schema::dropIfExists('customer_care_how');
    }
};
