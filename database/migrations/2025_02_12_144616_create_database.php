<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::statement('CREATE DATABASE IF NOT EXISTS blog_database2');
    }

    public function down(): void
    {
        DB::statement('DROP DATABASE IF EXISTS blog_database2');
    }
};
