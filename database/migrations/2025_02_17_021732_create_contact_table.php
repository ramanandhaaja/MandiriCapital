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

        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->json('contact_title');
            $table->json('map_title');
            $table->json('email_contact_title');
            $table->json('email_customer_report_title');
            $table->json('email_customer_report_tooltip');
            $table->json('phone_title');
            $table->json('social_media_title');
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
        Schema::dropIfExists('contact');
    }
};
