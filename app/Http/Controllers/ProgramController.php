<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Institution;
use App\Models\Degree;
use App\Models\Faculty;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $data = Program::with('institution', 'degree')->get();
        return view('admin.program.index', compact('data'));
    }

    public function create()
   {
    $institutions = Institution::where('status', 'on')->get();
    $degrees = Degree::where('status', 'on')->get();
    $faculties = Faculty::where('status', 'on')->get(); // Add this line
    
    return view('admin.program.create', compact('institutions', 'degrees', 'faculties'));
    }

    public function store(Request $request)
    {
        // In store() and update() methods
        $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'degree_id' => 'required|exists:degrees,id',
            'faculty_id' => 'required|exists:faculties,id', // Add this line
            'program_name' => 'required|string|max:255',
            'status' => 'required|in:on,off',
        ]);

        Program::create($request->all());

        return redirect()->route('admin.program.index')->with('success', 'Program created successfully.');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $institutions = Institution::where('status','on')->get();
        $degrees = Degree::where('institution_id', $program->institution_id)
                        ->where('status','on')
                        ->get();
        $faculties = Faculty::where('status', 'on')->get(); // Add this line
        
        return view('admin.program.edit', compact('program', 'institutions', 'degrees', 'faculties'));
    }

    public function update(Request $request, $id)
    {
        // Similarly, fetch into $program
        $program = Program::findOrFail($id);

        
       // In store() and update() methods
        $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'degree_id' => 'required|exists:degrees,id',
            'faculty_id' => 'required|exists:faculties,id', // Add this line
            'program_name' => 'required|string|max:255',
            'status' => 'required|in:on,off',
        ]);

        $program->update($request->only([
            'institution_id','degree_id','faculty_id','program_name','status'
        ]));

        return redirect()->route('admin.program.index')
                         ->with('success','Program updated successfully.');
    }
    public function destroy($id)
    {
        Program::destroy($id);
        return back()->with('success', 'Program deleted successfully.');
    }

    public function getDegrees($institution_id)
    {
        $degrees = Degree::where('institution_id', $institution_id)->get();
        return response()->json($degrees);
    }
}
