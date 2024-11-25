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
        Schema::create('chapters', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade')->comment('Referensi ke courses.id');
            $table->string('title')->comment('Judul bab');
            $table->text('description')->nullable()->comment('Deskripsi bab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
