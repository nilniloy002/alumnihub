<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function index()
    {
        $institutions = Institution::latest()->get();
        return view('admin.institution.index', compact('institutions'));
    }

    public function create()
    {
        return view('admin.institution.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'institution_name' => 'required|unique:institutions|string|max:255',
            'institution_logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:on,off',
        ]);

        $imagePath = $request->file('institution_logo')->store('institution-logos', 'public');

        Institution::create([
            'institution_name' => $request->institution_name,
            'institution_logo' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.institution.index')->with('success', 'Institution created successfully.');
    }

    public function show(Institution $institution)
    {
        return view('admin.institution.show', compact('institution'));
    }

    public function edit(Institution $institution)
    {
        return view('admin.institution.edit', compact('institution'));
    }

    public function update(Request $request, Institution $institution)
    {
        $request->validate([
            'institution_name' => 'required|string|max:255|unique:institutions,institution_name,'.$institution->id,
            'institution_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:on,off',
        ]);

        $data = $request->only(['institution_name', 'status']);

        if ($request->hasFile('institution_logo')) {
            // Delete old logo
            if (Storage::disk('public')->exists($institution->institution_logo)) {
                Storage::disk('public')->delete($institution->institution_logo);
            }
            
            $imagePath = $request->file('institution_logo')->store('institution-logos', 'public');
            $data['institution_logo'] = $imagePath;
        }

        $institution->update($data);

        return redirect()->route('admin.institution.index')->with('success', 'Institution updated successfully.');
    }

    public function destroy(Institution $institution)
    {
        if (Storage::disk('public')->exists($institution->institution_logo)) {
            Storage::disk('public')->delete($institution->institution_logo);
        }
        
        $institution->delete();
        return redirect()->route('admin.institution.index')->with('success', 'Institution deleted successfully.');
    }
}