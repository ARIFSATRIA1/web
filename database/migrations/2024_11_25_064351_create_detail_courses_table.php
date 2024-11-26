<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('detail_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courses_id'); 
            $table->string('chapter_title')->nullable(); 
            $table->string('video_url')->nullable(); 
            $table->text('text_content')->nullable(); 
            $table->timestamps();

            
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('detail_courses');
    }
};
