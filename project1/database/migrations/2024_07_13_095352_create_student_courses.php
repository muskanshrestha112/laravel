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
        Schema::create('student_courses', function (Blueprint $table) {
            $table->unsignedBigInteger(column:'student_id');
            $table->string(column:'title');
            $table->date(column:'enroll_date');

            $table->timestamps();
            $table->foreign(columns:'student_id')->references(columns:'id')->on(table:'students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_courses');
    }
};
