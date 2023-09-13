@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Role Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Role Name</label>
            <input type="text" name="role_name" class="form-control" placeholder="Role" value="{{ $role->role_name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">@lang('public.Created At')</label>
            <input type="text" name="created_at" class="form-control" placeholder="@lang('public.Created At')" value="{{ $role->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">@lang('public.Updated At')</label>
            <input type="text" name="updated_at" class="form-control" placeholder="@lang('public.Updated At')" value="{{ $role->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('role.index') }}" class="btn btn-primary">Back to List</a>
@endsection