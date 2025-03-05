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
        Schema::table('home_email_investor', function (Blueprint $table) {
            $table->string('destination')->default('corsec@mandiri-capital.co.id');
        });

        Schema::table('home_email_startup', function (Blueprint $table) {
            $table->string('destination')->default('corsec@mandiri-capital.co.id');
        });

        Schema::table('portfolio_email_startup', function (Blueprint $table) {
            $table->string('destination')->default('corsec@mandiri-capital.co.id');
        });

        Schema::table('portfolio_email_investor', function (Blueprint $table) {
            $table->string('destination')->default('corsec@mandiri-capital.co.id');
        });


        Schema::table('publication_email', function (Blueprint $table) {
            $table->string('destination')->default('corsec@mandiri-capital.co.id');
        });

        Schema::table('contact_email', function (Blueprint $table) {
            $table->string('destination')->default('corsec@mandiri-capital.co.id');
        });

        Schema::table('platform_email', function (Blueprint $table) {
            $table->string('destination')->default('corsec@mandiri-capital.co.id');
        });

        Schema::table('platform_email_zenith', function (Blueprint $table) {
            $table->string('destination')->default('corsec@mandiri-capital.co.id');
        });

    }

    /**
     * Reverse the migrations.
     */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_email_investor', function (Blueprint $table) {
            $table->dropColumn('destination');
        });

        Schema::table('home_email_startup', function (Blueprint $table) {
            $table->dropColumn('destination');
        });

        Schema::table('portfolio_email_startup', function (Blueprint $table) {
            $table->dropColumn('destination');
        });

        Schema::table('portfolio_email_investor', function (Blueprint $table) {
            $table->dropColumn('destination');
        });

        Schema::table('publication_email', function (Blueprint $table) {
            $table->dropColumn('destination');
        });

        Schema::table('contact_email', function (Blueprint $table) {
            $table->dropColumn('destination');
        });

        Schema::table('platform_email', function (Blueprint $table) {
            $table->dropColumn('destination');
        });

        Schema::table('platform_email_zenith', function (Blueprint $table) {
            $table->dropColumn('destination');
        });
    }
};
