<?php
 
namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\StoreRoleRequest;
use App\Models\Employee;
use App\Models\Office;
use App\Models\EmployeeRole;
use App\Models\Role;
use Illuminate\Http\Request;
 
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::orderBy('created_at', 'DESC')->get();
 
        return view('employee.index', compact('employee'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles=EmployeeRole::all();
        $offices=Office::all();

        return view('employee.create', compact('roles','offices'));
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        // dd($request->all());
        // Employee::create($request->all());
        $employee=Employee::create($request->validated());
        

        return to_route('employee.index', compact('employee'))->with('success', 'employee added successfully');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {

        return view('employee.show', compact('employee'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        // $employee = Employee::findOrFail($id);
 
        return view('employee.edit', compact('employee'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        // $employee = Employee::findOrFail($id);
 
        $employee->update($request->all());
 
        return redirect()->route('employee.index')->with('success', 'employee updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        // $employee = Employee::findOrFail($id);
 
        $employee->delete();
 
        return redirect()->route('employee.index')->with('success', 'employee deleted successfully');
    }
}