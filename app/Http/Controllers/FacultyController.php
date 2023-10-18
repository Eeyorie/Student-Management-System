<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacultyRequest;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculty = Faculty::orderBy('created_at', 'DESC')->get();

        return view('faculty.index', compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $roles=EmployeeRole::all();
        // $offices=Office::all();

        return view('faculty.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(StoreFacultyRequest $request)
    {
        $faculty = Faculty::create($request->validated());

        return redirect()->route('faculty.index')->with('success', 'faculty added successfully');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(Faculty $faculty)
    {

        return view('faculty.show', compact('faculty'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Faculty $faculty)
    {
        // $faculty = faculty::findOrFail($id);

        return view('faculty.edit', compact('faculty'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Faculty $faculty)
    {
        // $employee = Employee::findOrFail($id);

        $faculty->update($request->all());

        return redirect()->route('faculty.index')->with('success', 'faculty updated successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Faculty $faculty)
    {
        // $employee = Employee::findOrFail($id);

        $faculty->delete();

        return redirect()->route('faculty.index')->with('success', 'faculty deleted successfully');
    }
}
