@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">@lang('public.Employee Detail')</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">@lang('public.First Name')</label>
            <input type="text" name="FirstName" class="form-control" placeholder="@lang('public.First Name')" value="{{ $employee->FirstName }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">@lang('public.Last Name')</label>
            <input type="text" name="LastName" class="form-control" placeholder="@lang('public.Last Name')" value="{{ $employee->LastName }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Role</label>
            <input type="text" name="Role" class="form-control" placeholder="Role" value="{{ $employee->role->role_name }}" readonly>
        
    </div>
    <div class="row">
    </div>
        <div class="col mb-3">
            <label class="form-label">Office</label>
            <input type="text" name="Role" class="form-control" placeholder="Role" value="{{ $employee->office->office_address }}" readonly>
        </div>
        <div class="col mb-3" style="display: none">
            <label class="form-label">@lang('public.Created At')</label>
            <input type="text" name="created_at" class="form-control" placeholder="@lang('public.Created At')" value="{{ $employee->created_at }}" readonly>
        </div>
        <div class="col mb-3" style="display: none">
            <label class="form-label">@lang('public.Updated At')</label>
            <input type="text" name="updated_at" class="form-control" placeholder="@lang('public.Updated At')" value="{{ $employee->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('employee.index') }}" class="btn btn-primary">Back to List</a>

@endsection