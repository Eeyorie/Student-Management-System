<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseRequest;
use App\Models\Faculty;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::orderBy('created_at', 'DESC')->get();

        return view('course.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $roles=EmployeeRole::all();
        // $offices=Office::all();
        $faculty=Faculty::all();

        return view('course.create', compact('faculty'));
    }

    // // /**
    // //  * Store a newly created resource in storage.
    // //  */
    public function store(StoreCourseRequest $request)
    {
        $course = Course::create($request->validated());

        return redirect()->route('course.index')->with('success', 'Course added successfully');
    }

    // // /**
    // //  * Display the specified resource.
    // //  */
    public function show(Course $course)
    {
        $faculty=Faculty::all();

        return view('course.show', compact('course','faculty'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Course $course)
    {
        // $student = Student::findOrFail($id);
        $faculty=Faculty::all();

        return view('course.edit', compact('course', 'faculty'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Course $course)
    {
        // $employee = Employee::findOrFail($id);

        $course->update($request->all());

        return redirect()->route('course.index')->with('success', 'Course updated successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Course $course)
    {
        // $employee = Employee::findOrFail($id);

        $course->delete();

        return redirect()->route('course.index')->with('success', 'Course deleted successfully');
    }
}
