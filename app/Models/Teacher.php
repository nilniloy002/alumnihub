<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'employee_photo',
        'teacher_name',
        'designation',
        'institution_id',
        'faculty_id',
        'department_name',
        'mobile',
        'email',
        'nationality',
        'dob',
        'joining_date',
        'academic_background',
        'research_interest',
        'research_and_publications',
        'supervision',
        'achievements',
        'status'
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
