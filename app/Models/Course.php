<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'course_code',
        'description',
        'credits',
        'instructor_id',
        'semester',
        'max_enrollment',
        'start_date',
        'end_date',
    ];

    public function instructor()
    {
        return $this->belongsTo(Faculty::class, 'instructor_id');
    }

}
