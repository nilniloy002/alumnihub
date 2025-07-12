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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->unique();
            $table->string('employee_photo');
            $table->string('teacher_name');
            $table->string('designation');
            $table->foreignId('institution_id')->constrained('institutions')->onDelete('cascade');
            $table->foreignId('faculty_id')->constrained('faculties')->onDelete('cascade');
            $table->text('department_name');
            $table->string('mobile');
            $table->string('email');
            $table->string('nationality');
            $table->date('dob');
            $table->date('joining_date');
            $table->text('academic_background');
            $table->text('research_interest');
            $table->longText('research_and_publications');
            $table->longText('supervision');
            $table->longText('achievements');
            $table->enum('status', ['on', 'off'])->default('on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
