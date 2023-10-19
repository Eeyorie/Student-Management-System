<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'address',
        'email',
        'phone_number',
        'gender',
        'enrollment_date',
        'guardian_name',
        'guardian_email',
        'guardian_phone_number',
    ];

    public function enrollments()
{
    return $this->hasMany(Enrollment::class, 'student_id');
}
}
