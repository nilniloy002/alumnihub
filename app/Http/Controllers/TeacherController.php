<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Faculty;
use App\Models\Institution;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
   public function index()
    {
        $teachers = Teacher::with('faculty','institution')->latest()->get();
        return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {
        $faculties = Faculty::where('status', 'on')->get();
        $institutions = Institution::where('status', 'on')->get();
        return view('admin.teacher.create', compact('faculties','institutions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|unique:teachers',
            'employee_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'teacher_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'institution_id' => 'required|exists:institutions,id', // Added validation
            'faculty_id' => 'required|exists:faculties,id',
            'department_name' => 'required',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'nationality' => 'required|string|max:100',
            'dob' => 'required|date',
            'joining_date' => 'required|date',
            'academic_background' => 'required',
            'research_interest' => 'required',
            'research_and_publications' => 'required',
            'supervision' => 'required',
            'achievements' => 'required',
            'status' => 'required|in:on,off',
        ]);

        $imagePath = $request->file('employee_photo')->store('teacher_photos', 'public');

        Teacher::create([
            'employee_id' => $request->employee_id,
            'employee_photo' => $imagePath,
            'teacher_name' => $request->teacher_name,
            'designation' => $request->designation,
            'institution_id' => $request->institution_id, // Added field
            'faculty_id' => $request->faculty_id,
            'department_name' => $request->department_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'nationality' => $request->nationality,
            'dob' => $request->dob,
            'joining_date' => $request->joining_date,
            'academic_background' => $request->academic_background,
            'research_interest' => $request->research_interest,
            'research_and_publications' => $request->research_and_publications,
            'supervision' => $request->supervision,
            'achievements' => $request->achievements,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher created successfully.');
    }

    public function edit(Teacher $teacher)
    {
        $faculties = Faculty::where('status', 'on')->get();
        $institutions = Institution::where('status', 'on')->get();
        return view('admin.teacher.edit', compact('teacher', 'faculties','institutions'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'employee_id' => 'required|unique:teachers,employee_id,'.$teacher->id,
            'teacher_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'institution_id' => 'required|exists:institutions,id', // Added validation
            'faculty_id' => 'required|exists:faculties,id',
            'department_name' => 'required',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'nationality' => 'required|string|max:100',
            'dob' => 'required|date',
            'joining_date' => 'required|date',
            'academic_background' => 'required',
            'research_interest' => 'required',
            'research_and_publications' => 'required',
            'supervision' => 'required',
            'achievements' => 'required',
            'status' => 'required|in:on,off',
        ]);

        $data = $request->except('employee_photo');

        if ($request->hasFile('employee_photo')) {
            // Delete old photo
            if (Storage::disk('public')->exists($teacher->employee_photo)) {
                Storage::disk('public')->delete($teacher->employee_photo);
            }
            
            $imagePath = $request->file('employee_photo')->store('teacher_photos', 'public');
            $data['employee_photo'] = $imagePath;
        }

        $teacher->update($data);

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher updated successfully.');
    }

        public function show(Teacher $teacher)
    {
        return view('admin.teacher.view', compact('teacher'));
    }

    public function destroy(Teacher $teacher)
    {
        if (Storage::disk('public')->exists($teacher->employee_photo)) {
            Storage::disk('public')->delete($teacher->employee_photo);
        }
        
        $teacher->delete();
        return back()->with('success', 'Teacher deleted successfully.');
    }
}
