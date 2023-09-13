@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Office Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Office Name</label>
            <input type="text" name="office_name" class="form-control" placeholder="Name" value="{{ $office->office_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Office Address</label>
            <input type="text" name="office_address" class="form-control" placeholder="Address" value="{{ $office->office_address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Office Number</label>
            <input type="text" name="office_number" class="form-control" placeholder="Contact" value="{{ $office->office_number }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">@lang('public.Created At')</label>
            <input type="text" name="created_at" class="form-control" placeholder="@lang('public.Created At')" value="{{ $office->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">@lang('public.Updated At')</label>
            <input type="text" name="updated_at" class="form-control" placeholder="@lang('public.Updated At')" value="{{ $office->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('office.index') }}" class="btn btn-primary">Back to List</a>
@endsection