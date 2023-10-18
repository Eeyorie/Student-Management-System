{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Faculty Details</h2>
    <hr />
    <form action="{{ route('faculty.store') }}" method="POST" id="Submit">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="first_name" class="form-control" value="{{ $faculty->first_name }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control"  value="{{ $faculty->last_name }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="date_of_birth" class="form-control"  value="{{ $faculty->date_of_birth }}" readonly>
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control"  value="{{ $faculty->email }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="phone_number" class="form-control"  value="{{ $faculty->phone_number }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="department" class="form-control"  value="{{ $faculty->department }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="position" class="form-control"  value="{{ $faculty->position }}" readonly>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="d-grid">
            </div>
        </div>
    </form>
@endsection
