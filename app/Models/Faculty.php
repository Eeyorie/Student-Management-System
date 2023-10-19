<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
        'phone_number',
        'department',
        'position',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }
}
