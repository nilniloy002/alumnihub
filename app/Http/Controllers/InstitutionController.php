<?php

namespace App\Http\Controllers;
use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function index()
    {
        $data = Institution::all();
        return view('admin.institution.index', compact('data'));
    }

    public function create()
    {
        return view('admin.institution.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'institution_name' => 'required',
            'institution_logo' => 'required|image',
            'status' => 'required|in:on,off',
        ]);

        $image = $request->file('institution_logo')->store('institution-logos', 'public');

        Institution::create([
            'institution_name' => $request->institution_name,
            'institution_logo' => $image,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.institution.index')->with('success', 'Institution created successfully.');
    }

    public function edit(Institution $institution)
    {
        return view('admin.institution.edit', compact('institution'));
    }

    public function update(Request $request, Institution $institution)
    {
        $request->validate([
            'institution_name' => 'required',
            'status' => 'required|in:on,off',
        ]);

        $data = $request->only(['institution_name', 'status']);

        if ($request->hasFile('institution_logo')) {
            $data['institution_logo'] = $request->file('institution_logo')->store('institution-logos', 'public');
        }

        $institution->update($data);

        return redirect()->route('admin.institution.index')->with('success', 'Institution updated successfully.');
    }

    public function destroy(Institution $institution)
    {
        $institution->delete();
        return redirect()->route('admin.institution.index')->with('success', 'Institution deleted.');
    }
}
