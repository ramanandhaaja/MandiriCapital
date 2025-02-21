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
        //
        Schema::table('publications', function (Blueprint $table) {
            $table->boolean('hide_category')->default(false);
        });

        Schema::table('home_headline', function (Blueprint $table) {
            $table->boolean('hide_title')->default(false);
            $table->boolean('hide_category')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //

        Schema::table('publications', function (Blueprint $table) {
            $table->dropColumn('hide_category');
        });

        Schema::table('home_headline', function (Blueprint $table) {
            $table->dropColumn('hide_title');
            $table->dropColumn('hide_category');
        });
    }
};
