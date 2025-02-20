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
        Schema::table('customer_care', function (Blueprint $table) {
            $table->string('customer_care_image1')->nullable();
            $table->string('customer_care_image2')->nullable();
            $table->string('customer_care_image3')->nullable();
            $table->string('customer_care_image4')->nullable();
            $table->string('customer_care_image5')->nullable();
            $table->string('customer_care_image6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_care', function (Blueprint $table) {
            $table->dropColumn('customer_care_image1');
            $table->dropColumn('customer_care_image2');
            $table->dropColumn('customer_care_image3');
            $table->dropColumn('customer_care_image4');
            $table->dropColumn('customer_care_image5');
            $table->dropColumn('customer_care_image6');
        });
    }
};
