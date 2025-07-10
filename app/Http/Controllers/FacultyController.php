<?php

namespace App\Http\Controllers;
use App\Models\Institution;
use App\Models\Degree;
use App\Models\Faculty;
use Illuminate\Http\Request;


class FacultyController extends Controller
{
   public function index()
    {
        $data = Faculty::latest()->get();
        return view('admin.faculty.index', compact('data'));
    }

    public function create()
    {
        return view('admin.faculty.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'faculty_name' => 'required|string|max:255',
            'status' => 'required|in:on,off',
        ]);

        Faculty::create($request->all());
        return redirect()->route('admin.faculty.index')->with('success', 'Faculty created successfully.');
    }

    public function edit(Faculty $faculty)
    {
        return view('admin.faculty.edit', compact('faculty'));
    }

    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'faculty_name' => 'required|string|max:255',
            'status' => 'required|in:on,off',
        ]);

        $faculty->update($request->all());
        return redirect()->route('admin.faculty.index')->with('success', 'Faculty updated successfully.');
    }

    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route('admin.faculty.index')->with('success', 'Faculty deleted successfully.');
    }
    
}
