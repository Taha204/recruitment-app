<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->foreignId('recruiter_id')->constrained('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->dropForeign(['recruiter_id']);
            $table->dropColumn('recruiter_id');
        });
    }
};

