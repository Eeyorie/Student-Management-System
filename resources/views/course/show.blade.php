{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Course Details</h2>
    <hr />
    <form method="POST" id="Submit">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="course_name" class="form-control" value="{{ $course->course_name }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="course_code" class="form-control" value="{{ $course->course_code }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control" value="{{ $course->description }}" readonly>
            </div>
            <div class="col">
                <input type="text" name="credits" class="form-control" value="{{ $course->credits }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="semester" class="form-control" value="{{ $course->semester }}" readonly>
            </div>
            <div class="col">
                <select name="instructor_id" class="form-control @error('first_name')
                is-invalid
                @enderror" placeholder="Choose Role" readonly>
                    @foreach ($faculty as $facu)
                    <option value="{{ $facu->id }}">{{$facu->first_name}} {{$facu->last_name}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('first_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="text" name="" class="form-control" value="{{ $course->max_enrollment }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="start_date" class="form-control" value="{{ $course->start_date }}" readonly>
            </div>
            <div class="col">
                <input type="date" name="end_date" class="form-control" value="{{ $course->end_date }}" readonly>
            </div>
        </div>
        </div>
    </form>
@endsection
