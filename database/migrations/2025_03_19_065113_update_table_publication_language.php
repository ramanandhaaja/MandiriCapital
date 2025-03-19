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
        Schema::table('publications', function (Blueprint $table) {
            // First, rename the existing columns to temporary names
            $table->renameColumn('title', 'title_old');
            $table->renameColumn('content', 'content_old');

            // Add new JSON columns
            $table->json('title')->after('title_old');
            $table->json('content')->nullable()->after('content_old');
        });

        // Transfer data from old columns to JSON format
        DB::statement("UPDATE publications SET
            title = JSON_OBJECT('en', title_old, 'id', title_old),
            content = CASE WHEN content_old IS NOT NULL THEN JSON_OBJECT('en', content_old, 'id', content_old) ELSE NULL END");

        Schema::table('publications', function (Blueprint $table) {
            // Drop the old columns
            $table->dropColumn('title_old');
            $table->dropColumn('content_old');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('publications', function (Blueprint $table) {
            // First, rename the JSON columns to temporary names
            $table->renameColumn('title', 'title_json');
            $table->renameColumn('content', 'content_json');

            // Add back the original string/text columns
            $table->string('title')->after('title_json');
            $table->longText('content')->nullable()->after('content_json');
        });

        // Transfer data back from JSON format to string columns (using English version)
        DB::statement("UPDATE publications SET
            title = JSON_UNQUOTE(JSON_EXTRACT(title_json, '$.en')),
            content = CASE WHEN content_json IS NOT NULL THEN JSON_UNQUOTE(JSON_EXTRACT(content_json, '$.en')) ELSE NULL END");

        Schema::table('publications', function (Blueprint $table) {
            // Drop the JSON columns
            $table->dropColumn('title_json');
            $table->dropColumn('content_json');
        });
    }
};
