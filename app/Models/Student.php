<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $guarded = [];
    protected $fillable = ['full_name', 'email', 'department', 'enrollment_year'];
}
