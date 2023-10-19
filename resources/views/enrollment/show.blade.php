{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Enrollment Details</h2>
    <hr />
    <form method="POST" id="Submit">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="student_id" class="form-control" value="{{$enrollment->student->first_name}} {{$enrollment->student->last_name}}" readonly>
                <input style="display: none;" type="text" name="student_id" class="form-control" value="{{$enrollment->student_id}}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="course_id" class="form-control" value="{{$enrollment->course->course_code}}" readonly>
                <input type="text" name="course_id" class="form-control" value="{{$enrollment->course_id}}" readonly style="display: none;">
            </div>
            <div class="col">
                <input type="text" name="status" class="form-control" value="{{$enrollment->status}}" readonly>
            </div>
            <div class="col">
                <input type="date" name="enrollment_date" class="form-control" value="{{$enrollment->enrollment_date}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">

            </div>
        </div>
    </form>
@endsection
