{{-- //resources/views/product/edit.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Faculty Details</h2>
    <hr />
    <form action="{{ route('faculty.update', $faculty->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="first_name" class="form-control" value="{{ $faculty->first_name }}" >
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control"  value="{{ $faculty->last_name }}" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="date_of_birth" class="form-control"  value="{{ $faculty->date_of_birth }}" >
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control"  value="{{ $faculty->email }}" >
            </div>
            <div class="col">
                <input type="text" name="phone_number" class="form-control"  value="{{ $faculty->phone_number }}" >
            </div>
            <div class="col">
                <input type="text" name="department" class="form-control"  value="{{ $faculty->department }}" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="position" class="form-control"  value="{{ $faculty->position }}" >
            </div>
        </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">@lang('public.Update')</button>
                <br>
                <a href="{{ route('faculty.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </form>
@endsection
