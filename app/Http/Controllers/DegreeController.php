<?php

namespace App\Http\Controllers;
use App\Models\Institution;
use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function index()
    {
        $data = Degree::with('institution')->latest()->get();
        return view('admin.degree.index', compact('data'));
    }
    
    public function create()
    {
        $institutions = \App\Models\Institution::where('status', 'on')->get();
        return view('admin.degree.create', compact('institutions'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'degree_name' => 'required|string',
            'status' => 'required|in:on,off',
        ]);
    
        Degree::create($request->all());
        return redirect()->route('admin.degree.index')->with('success', 'Degree created successfully.');
    }
    
    public function edit(Degree $degree)
    {
        $institutions = \App\Models\Institution::where('status', 'on')->get();
        return view('admin.degree.edit', compact('degree', 'institutions'));
    }
    
    public function update(Request $request, Degree $degree)
    {
        $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'degree_name' => 'required|string',
            'status' => 'required|in:on,off',
        ]);
    
        $degree->update($request->all());
        return redirect()->route('admin.degree.index')->with('success', 'Degree updated successfully.');
    }
    
    public function destroy(Degree $degree)
    {
        $degree->delete();
        return redirect()->route('admin.degree.index')->with('success', 'Degree deleted successfully.');
    }

    public function getByInstitution($institution_id)
    {
        $options = '<option value="" disabled selected>Select Degree</option>';
        foreach (Degree::where('institution_id', $institution_id)->where('status','on')->get() as $deg) {
            $options .= "<option value=\"{$deg->id}\">{$deg->degree_name}</option>";
        }
        return $options;
    }


}
