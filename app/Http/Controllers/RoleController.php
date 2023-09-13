<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use Illuminate\Http\Request;
use App\Models\EmployeeRole;

class RoleController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = EmployeeRole::orderBy('created_at', 'DESC')->get();
 
        return view('role.index', compact('role'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        // EmployeeRole::create($request->all());
        EmployeeRole::create($request->validated());
        
        return to_route('role.index')->with('success', 'EmployeeRole added successfully');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(EmployeeRole $role)
    {
        // $role = EmployeeRole::findOrFail($id);
 
        return view('role.show', compact('role'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeRole $role)
    {
        // $role = EmployeeRole::findOrFail($id);
 
        return view('role.edit', compact('role'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeRole $role)
    {
        // $role = EmployeeRole::findOrFail($id);
 
        $role->update($request->all());
 
        return redirect()->route('role.index')->with('success', 'EmployeeRole updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeRole $role)
    {
        // $role = EmployeeRole::findOrFail($id);
 
        $role->delete();
 
        return redirect()->route('role.index')->with('success', 'EmployeeRole deleted successfully');
    }
}
