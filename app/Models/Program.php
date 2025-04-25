<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['institution_id', 'degree_id', 'program_name', 'status'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id', 'id');
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id', 'id');
    }

}