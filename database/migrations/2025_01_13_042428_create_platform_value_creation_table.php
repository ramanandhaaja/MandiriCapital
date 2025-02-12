<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('platform_value_creation', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->json('content_frontpage')->nullable();
            $table->json('content_sub_frontpage')->nullable();
            $table->text('logo')->nullable();
            $table->string('image_path_frontpage1')->nullable();
            $table->string('image_path_frontpage2')->nullable();
            $table->string('image_path_frontpage3')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('platform_value_creation');
    }
};
