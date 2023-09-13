<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfficeRequest;
use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{

    public function index() {

        $office = Office::orderBy('created_at', 'DESC')->get();
 
        return view('office.index', compact('office'));
    }

    public function create(){

        return view('office.create');
    }

    public function store(StoreOfficeRequest $office) {


        // dd($office->validated());
        Office::create($office->validated());

        return to_route('office.index', compact('office'))->with('success', 'Office added successfully');
    }

    public function show(Office $office) {

        return view('office.show', compact('office'));
    }

    public function edit(Office $office)
    {
 
        return view('office.edit', compact('office'));
    }

    public function update(Request $request, Office $office)
    {
 
        $office->update($request->all());
 
        return redirect()->route('office.index')->with('success', 'Office updated successfully');
    }

    public function destroy(Office $office)
    {
 
        $office->delete();
 
        return redirect()->route('office.index')->with('success', 'Office deleted successfully');
    }
}
