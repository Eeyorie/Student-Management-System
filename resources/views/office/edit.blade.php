@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Office</h1>
    <hr />
    <form action="{{ route('office.update', $office->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Office Name</label>
                <input type="text" name="office_name" class="form-control" placeholder="Name" value="{{ $office->office_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Office Address</label>
                <input type="text" name="office_address" class="form-control" placeholder="Address" value="{{ $office->office_address }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Office Contact</label>
                <input type="text" name="office_number" class="form-control" placeholder="Contact Number" value="{{ $office->office_number }}" >
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">@lang('public.Update')</button>
                <br>
                <a href="{{ route('office.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </form>
@endsection