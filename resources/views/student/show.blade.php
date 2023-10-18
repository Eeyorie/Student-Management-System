{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Student Details</h2>
    <hr />
    <form action="{{ route('student.store') }}" method="POST" id="Submit">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control"  value="{{ $student->last_name }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="date_of_birth" class="form-control"  value="{{ $student->date_of_birth }}" readonly>
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control"  value="{{ $student->email }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="phone_number" class="form-control"  value="{{ $student->phone_number }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="gender" class="form-control"  value="{{ $student->gender }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="address" class="form-control"  value="{{ $student->address }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="enrollment_date" class="form-control"  value="{{ $student->enrollment_date }}" readonly>
            </div>
        </div>

        <h2 class="mb-0">Contact Person</h2>
        <hr />
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="guardian_name" class="form-control "  value="{{ $student->guardian_name }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="guardian_email" class="form-control"  value="{{ $student->guardian_email }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="guardian_phone_number" class="form-control"  value="{{ $student->guardian_phone_number }}" readonly>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="d-grid">
            </div>
        </div>
    </form>
@endsection
