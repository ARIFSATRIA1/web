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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chapter_id')->constrained('chapters')->onDelete('cascade')->comment('Referensi ke chapters.id');
            $table->string('title')->comment('Judul materi');
            $table->enum('type', ['video', 'quiz', 'text'])->comment('Tipe materi');
            $table->text('content')->nullable()->comment('Isi materi (untuk tipe teks)');
            $table->string('video_url')->nullable()->comment('URL video (jika tipe materi adalah video)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
