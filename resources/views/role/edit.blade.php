@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Role</h1>
    <hr />
    <form action="{{ route('role.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Role</label>
                <input type="text" name="role_name" class="form-control" placeholder="@lang('public.First Name')" value="{{ $role->role_name }}" >
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">@lang('public.Update')</button>
                <br>
                <a href="{{ route('role.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </form>
@endsection