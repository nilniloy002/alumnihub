<?php

namespace App\Imports;

use App\Models\Alumni;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AlumniImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Alumni([
            'institution_id' => $row['institution_id'],
            'degree_id' => $row['degree_id'],
            'program_id' => $row['program_id'],
            'name_of_student' => $row['name_of_student'],
            'father_name' => $row['father_name'],
            'mobile' => $row['mobile'],
            'email' => $row['email'],
            'batch' => $row['batch'],
            'student_id' => $row['student_id'],
            'passing_year' => $row['passing_year'],
            'result' => $row['result'],
            'nationality' => $row['nationality'],
            'religion' => $row['religion'],
            'gender' => $row['gender'],
            'marital_status' => $row['marital_status'],
            'current_occupation' => $row['current_occupation'],
            'current_occupation_address' => $row['current_occupation_address'],
            'permanent_address' => $row['permanent_address'],
            'status' => $row['status'] ?? 'on'
        ]);
    }
}


