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
            $table->BigIncrements('id');
            $table->string('title')->comment('Judul kursus');
            $table->text('description')->comment('Deskripsi kursus');
            $table->string('thumbnail')->nullable()->comment('Gambar thumbnail untuk kursus');
            $table->timestamps();
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
