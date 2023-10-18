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
    // public function store(StoreStudentRequest $request)
    // {
    //     // dd($request->all());
    //     // Employee::create($request->all());
    //     $employee=Student::create($request->validated());


    //     return to_route('employee.index', compact('employee'))->with('success', 'employee added successfully');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Student $employee)
    // {

    //     return view('employee.show', compact('employee'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Student $employee)
    // {
    //     // $employee = Employee::findOrFail($id);

    //     return view('employee.edit', compact('employee'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Student $employee)
    // {
    //     // $employee = Employee::findOrFail($id);

    //     $employee->update($request->all());

    //     return redirect()->route('employee.index')->with('success', 'employee updated successfully');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Student $employee)
    // {
    //     // $employee = Employee::findOrFail($id);

    //     $employee->delete();

    //     return redirect()->route('employee.index')->with('success', 'employee deleted successfully');
    // }
}
