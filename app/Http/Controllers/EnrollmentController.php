<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEnrollmentRequest;

class EnrollmentController extends Controller
{
    public function index() {

        $student = Student::all();
        $course = Course::all();
        $enrollment = Enrollment::orderBy('created_at', 'DESC')->get();


        return view('enrollment.index', compact('enrollment', 'student', 'course'));
    }


    public function create() {

        $student = Student::all();
        $course = Course::all();

        return view('enrollment.create', compact('student','course'));
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(StoreEnrollmentRequest $request)
    {
        $enrollment = Enrollment::create($request->validated());

        return redirect()->route('enrollment.index')->with('success', 'student added successfully');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(Enrollment $enrollment)
    {
        $student = Student::all();
        $course = Course::all();

        return view('enrollment.show', compact('enrollment'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Enrollment $enrollment)
    {
        $student = Student::all();
        $course = Course::all();

        return view('enrollment.edit', compact('enrollment', 'student', 'course'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Enrollment $enrollment)
    {
        // $employee = Employee::findOrFail($id);

        $enrollment->update($request->all());

        return redirect()->route('enrollment.index')->with('success', 'Student updated successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Enrollment $enrollment)
    {
        // $employee = Employee::findOrFail($id);

        $enrollment->delete();

        return redirect()->route('enrollment.index')->with('success', 'Student deleted successfully');
    }
}
