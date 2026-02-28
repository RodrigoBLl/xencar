<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('process_title')->nullable()->after('body_content');
            $table->string('process_subtitle')->nullable()->after('process_title');
            $table->json('process_steps')->nullable()->after('process_subtitle');
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['process_title', 'process_subtitle', 'process_steps']);
        });
    }
};
