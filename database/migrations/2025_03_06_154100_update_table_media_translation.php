<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            // First, rename the existing columns to temporary names
            $table->renameColumn('title', 'title_old');
            $table->renameColumn('content_heading', 'content_heading_old');
            $table->renameColumn('content', 'content_old');

            // Add new JSON columns
            $table->json('title')->after('title_old');
            $table->json('content_heading')->nullable()->after('content_heading_old');
            $table->json('content')->nullable()->after('content_old');
        });

        // Transfer data from old columns to JSON format
        DB::statement("UPDATE blog_posts SET
            title = JSON_OBJECT('en', title_old, 'id', title_old),
            content_heading = CASE WHEN content_heading_old IS NOT NULL THEN JSON_OBJECT('en', content_heading_old, 'id', content_heading_old) ELSE NULL END,
            content = CASE WHEN content_old IS NOT NULL THEN JSON_OBJECT('en', content_old, 'id', content_old) ELSE NULL END");

        Schema::table('blog_posts', function (Blueprint $table) {
            // Drop the old columns
            $table->dropColumn('title_old');
            $table->dropColumn('content_heading_old');
            $table->dropColumn('content_old');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            // First, rename the JSON columns to temporary names
            $table->renameColumn('title', 'title_json');
            $table->renameColumn('content_heading', 'content_heading_json');
            $table->renameColumn('content', 'content_json');

            // Add back the original string/text columns
            $table->string('title')->after('title_json');
            $table->longText('content_heading')->nullable()->after('content_heading_json');
            $table->longText('content')->nullable()->after('content_json');
        });

        // Transfer data back from JSON format to string columns (using English version)
        DB::statement("UPDATE blog_posts SET
            title = JSON_UNQUOTE(JSON_EXTRACT(title_json, '$.en')),
            content_heading = CASE WHEN content_heading_json IS NOT NULL THEN JSON_UNQUOTE(JSON_EXTRACT(content_heading_json, '$.en')) ELSE NULL END,
            content = CASE WHEN content_json IS NOT NULL THEN JSON_UNQUOTE(JSON_EXTRACT(content_json, '$.en')) ELSE NULL END");

        Schema::table('blog_posts', function (Blueprint $table) {
            // Drop the JSON columns
            $table->dropColumn('title_json');
            $table->dropColumn('content_heading_json');
            $table->dropColumn('content_json');
        });
    }
};
