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
        Schema::create('course_skill_titles', function (Blueprint $table) {
            $table->id();
            $table->string('skill_name')->nullable();
            $table->string('course_title')->nullable();
            $table->unsignedBigInteger('sub_topic_id')->nullable();
            $table->timestamps();
            $table->foreign('sub_topic_id')->references('id')->on('sub_topics')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_skill_titles');
    }
};
