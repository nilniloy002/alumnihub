<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    protected $fillable = ['institution_id', 'degree_name', 'status'];

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}