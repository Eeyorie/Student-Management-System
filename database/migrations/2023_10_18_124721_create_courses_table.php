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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_code');
            $table->text('description');
            $table->integer('credits');
            $table->unsignedBigInteger('instructor_id'); // Foreign Key
            $table->string('semester');
            $table->integer('max_enrollment');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('instructor_id')->references('id')->on('faculty')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
