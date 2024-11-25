<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'title',
        'description',
        'thumbnail'
    ];

    
    public function detailCourses(): HasMany
    {
        return $this->hasMany(detailCourses::class, 'courses_id');
    }
}
