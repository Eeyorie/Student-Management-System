@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">@lang('public.Edit Employee')</h1>
    <hr />
    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">@lang('public.First Name')</label>
                <input type="text" name="FirstName" class="form-control" placeholder="@lang('public.First Name')" value="{{ $employee->FirstName }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">@lang('public.Last Name')</label>
                <input type="text" name="LastName" class="form-control" placeholder="@lang('public.Last Name')" value="{{ $employee->LastName }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Role</label>
                <input type="text" name="Role" class="form-control" placeholder="Role" value="{{ $employee->role->role_name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Office</label>
                <input type="text" name="Office" class="form-control" placeholder="Office" value="{{ $employee->office->office_name }}" >
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">@lang('public.Update')</button>
                <br>
                <a href="{{ route('employee.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </form>
@endsection