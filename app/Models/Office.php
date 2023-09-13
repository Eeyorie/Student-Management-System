<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'office_name',
        'office_address',
        'office_number'
];


    // public function employees() {

    // // babalikan
    //     return $this->hasMany(Employee::class, 'id', '');
    // }
}
