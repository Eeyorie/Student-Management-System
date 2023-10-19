{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Course Details</h2>
    <hr />
    <form action="{{ route('course.update',  $course->id) }}" method="POST" id="Submit">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="course_name" class="form-control" value="{{ $course->course_name }}">
            </div>
            <div class="col">
                <input type="text" name="course_code" class="form-control" value="{{ $course->course_code }}">
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control" value="{{ $course->description }}">
            </div>
            <div class="col">
                <input type="text" name="credits" class="form-control" value="{{ $course->credits }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="semester" class="form-control" value="{{ $course->semester }}">
            </div>
            <div class="col">
                <select name="instructor_id" class="form-control @error('first_name')
                is-invalid
                @enderror" placeholder="Choose Role">
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
                <input type="text" name="" class="form-control" value="{{ $course->max_enrollment }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="start_date" class="form-control" value="{{ $course->start_date }}">
            </div>
            <div class="col">
                <input type="date" name="end_date" class="form-control" value="{{ $course->end_date }}">
            </div>
        </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary" style="width: 5rem;" id="btnSubmit">@lang('public.Submit')</button>
            </div>
        </div>
    </form>
    <script>

    $("#btnSubmit").click(function() {
            $(this).attr('disabled', true);
            $("#loader-container").addClass('active');
            $("#Submit").submit();
    });

    </script>
@endsection
