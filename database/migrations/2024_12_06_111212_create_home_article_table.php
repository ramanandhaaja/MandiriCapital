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
        //TODO : article cms for page home, khusus home aja
        Schema::create('home_article', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->date('published_date');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_article');
    }
};