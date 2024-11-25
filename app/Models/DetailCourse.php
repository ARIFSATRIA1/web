<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class DetailCourse extends Model
{
    //


    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }
}
