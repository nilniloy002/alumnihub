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
        Schema::table('programs', function (Blueprint $table) {
            // Add faculty_id column with foreign key constraint
            $table->foreignId('faculty_id')
                  ->after('degree_id')
                  ->constrained('faculties')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('programs', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['faculty_id']);
            
            // Then drop the column
            $table->dropColumn('faculty_id');
        });
    }
};
