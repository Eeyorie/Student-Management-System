<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::orderBy('created_at', 'DESC')->get();

        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $roles=EmployeeRole::all();
        // $offices=Office::all();

        return view('student.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());

        return redirect()->route('student.index')->with('success', 'Student added successfully');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(Student $student)
    {

        return view('student.show', compact('student'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Student $student)
    {
        // $student = Student::findOrFail($id);

        return view('student.edit', compact('student'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Student $student)
    {
        // $employee = Employee::findOrFail($id);

        $student->update($request->all());

        return redirect()->route('student.index')->with('success', 'student updated successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Student $student)
    {
        // $employee = Employee::findOrFail($id);

        $student->delete();

        return redirect()->route('student.index')->with('success', 'student deleted successfully');
    }
}
