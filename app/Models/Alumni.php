<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';
    protected $fillable = [
        'institution_id','degree_id','program_id','name_of_student','father_name',
        'mobile','email','batch','student_id','passing_year','result',
        'nationality','religion','gender','marital_status',
        'current_occupation','current_occupation_address','permanent_address',
        'student_photo','status'
    ];

    public function institution() 
    { 
        return $this->belongsTo(Institution::class);
     
    }
    public function degree()      
    { 
        return $this->belongsTo(Degree::class); 
    }
    public function program()     
    { 
        return $this->belongsTo(Program::class); 
    }
}