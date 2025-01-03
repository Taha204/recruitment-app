<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('job_offers')->truncate();
    }

    public function down(): void
    {
        // No rollback needed for truncation
    }
};
