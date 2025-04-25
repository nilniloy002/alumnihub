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
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institution_id')->constrained()->onDelete('cascade');
            $table->foreignId('degree_id')->constrained()->onDelete('cascade');
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->string('name_of_student');
            $table->string('father_name');
            $table->unsignedBigInteger('mobile');
            $table->string('email')->unique();
            $table->string('batch');
            $table->unsignedBigInteger('student_id')->unique();
            $table->integer('passing_year');
            $table->decimal('result', 5, 2);
            $table->string('nationality');
            $table->enum('religion', ['Muslim','Hindu','Buddhist','Christian']);
            $table->enum('gender', ['Male','Female','Others']);
            $table->enum('marital_status', ['Married','Unmarried']);
            $table->text('current_occupation');
            $table->string('current_occupation_address');
            $table->text('permanent_address');
            $table->string('student_photo')->nullable();
            $table->enum('status', ['on','off'])->default('on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni');
    }
};
