<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class DetailCourse extends Model
{
    
    protected $table = 'detail_courses';

    protected $fillable = [
        'courses_id',
        'chapter_title',
        'video_url',
        'text_content'
    ];


    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }
}
