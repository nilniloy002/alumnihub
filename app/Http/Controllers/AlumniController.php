<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Institution;
use App\Models\Degree;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Imports\AlumniImport;
use Maatwebsite\Excel\Facades\Excel;

class AlumniController extends Controller
{
    public function index()
    {
        $data = Alumni::with('institution','degree','program')->latest()->get();
        return view('admin.alumni.index', compact('data'));
    }

    public function show($id)
    {
        $Alumni = Alumni::with(['institution', 'degree', 'program'])->findOrFail($id);

        return view('admin.alumni.view', compact('Alumni'));
    }

    public function create()
    {
        $institutions = Institution::where('status','on')->get();
        return view('admin.alumni.create', compact('institutions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'degree_id' => 'required|exists:degrees,id',
            'program_id' => 'required|exists:programs,id',
            'name_of_student' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mobile' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email|max:255|unique:alumni,email',
            'batch' => 'required|string|max:50',
            'student_id' => 'required|numeric|unique:alumni,student_id',
            'passing_year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'result' => 'required|numeric|between:0,5',
            'nationality' => 'required|string|max:100',
            'religion' => 'required|in:Islam,Hindu,Buddhist,Christian',
            'gender' => 'required|in:Male,Female,Others',
            'marital_status' => 'required|in:Married,Unmarried',
            'current_occupation' => 'required|string|max:255',
            'current_occupation_address' => 'required|string|max:500',
            'permanent_address' => 'required|string|max:500',
            'student_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'special_training' => 'nullable|string',
            'social_link' => 'nullable|url',
            'status' => 'required|in:on,off'
        ]);
    
        // Handle file upload
        if ($request->hasFile('student_photo')) {
            $validatedData['student_photo'] = $request->file('student_photo')->store('alumni-photos', 'public');
        }
    
        Alumni::create($validatedData);
        
        return redirect()->route('admin.alumni.index')
                        ->with('success', 'Alumni added successfully.');
    }
    
    public function edit($id)
    {
        $Alumni = Alumni::findOrFail($id);
        $institutions = Institution::where('status','on')->get();
        $degrees = Degree::where('institution_id', $Alumni->institution_id)->get();
        $programs = Program::where('degree_id', $Alumni->degree_id)->get();
        
        return view('admin.alumni.edit', compact('Alumni', 'institutions', 'degrees', 'programs'));
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::findOrFail($id);
        
        $validatedData = $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'degree_id' => 'required|exists:degrees,id',
            'program_id' => 'required|exists:programs,id',
            'name_of_student' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mobile' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email|max:255|unique:alumni,email,' . $alumni->id,
            'batch' => 'required|string|max:50',
            'student_id' => 'required|numeric|unique:alumni,student_id,' . $alumni->id,
            'passing_year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'result' => 'required|numeric|between:0,5',
            'nationality' => 'required|string|max:100',
            'religion' => 'required|in:Islam,Hindu,Buddhist,Christian',
            'gender' => 'required|in:Male,Female,Others',
            'marital_status' => 'required|in:Married,Unmarried',
            'current_occupation' => 'required|string|max:255',
            'current_occupation_address' => 'required|string|max:500',
            'permanent_address' => 'required|string|max:500',
            'student_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'special_training' => 'nullable|string',
            'social_link' => 'nullable|url',
            'status' => 'required|in:on,off'
        ]);
    
        // Handle file upload
        if ($request->hasFile('student_photo')) {
            // Delete old photo if exists
            if ($alumni->student_photo) {
                Storage::disk('public')->delete($alumni->student_photo);
            }
            $validatedData['student_photo'] = $request->file('student_photo')->store('alumni-photos', 'public');
        }
    
        // Handle photo removal if needed (add a checkbox in your form)
        if ($request->has('remove_photo') && $request->remove_photo) {
            if ($alumni->student_photo) {
                Storage::disk('public')->delete($alumni->student_photo);
            }
            $validatedData['student_photo'] = null;
        }
    
        $alumni->update($validatedData);
        
        return redirect()->route('admin.alumni.index')
                        ->with('success', 'Alumni updated successfully.');
    }

    public function destroy($id)
    {
        Alumni::destroy($id);
        return redirect()->route('admin.alumni.index')
                         ->with('success','Alumni deleted successfully.');
    }

    // AJAX for cascading selects
    public function getDegrees($institution)
    {
        $options = '<option value="" disabled>Select Degree</option>';
        Degree::where('institution_id',$institution)->where('status','on')->get()
              ->each(fn($d)=> $options .= "<option value=\"{$d->id}\">{$d->degree_name}</option>");
        return $options;
    }

    public function getPrograms($degree)
    {
        $options = '<option value="" disabled selected>Select Degree</option>';
        foreach (Program::where('degree_id', $degree)->where('status','on')->get() as $p) {
            $options .= "<option value=\"{$p->id}\">{$p->program_name}</option>";
        }
        return $options;
    }

    public function importForm()
    {
        return view('admin.alumni.import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new AlumniImport, $request->file('import_file'));

        return redirect()->route('admin.alumni.index')->with('success', 'Alumni imported successfully.');
    }

}