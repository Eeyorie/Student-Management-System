{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Course Details</h2>
    <hr />
    <form action="{{ route('course.store') }}" method="POST" id="Submit">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="course_name" class="form-control @error('course_name')
                    is-invalid
                @enderror" placeholder="Course Name">
                <div class="invalid-feedback">
                    @error('course_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="text" name="course_code" class="form-control @error('course_code')
                    is-invalid
                @enderror" placeholder="Course Code">
                <div class="invalid-feedback">
                    @error('course_code')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control @error('description')
                    is-invalid
                @enderror" placeholder="Description">
                <div class="invalid-feedback">
                    @error('description')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="text" name="credits" class="form-control @error('credits')
                    is-invalid
                @enderror" placeholder="Credits">
                <div class="invalid-feedback">
                    @error('credits')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="semester" class="form-control @error('semester')
                    is-invalid
                @enderror" placeholder="Semester">
                <div class="invalid-feedback">
                    @error('semester')
                    {{$message}}
                    @enderror
                </div>
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
                <input type="text" name="max_enrollment" class="form-control @error('max_enrollment')
                    is-invalid
                @enderror" placeholder="Course Status">
                <div class="invalid-feedback">
                    @error('max_enrollment')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="start_date" class="form-control @error('start_date')
                    is-invalid
                @enderror" placeholder="Start Date">
                <div class="invalid-feedback">
                    @error('start_date')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="date" name="end_date" class="form-control @error('end_date')
                    is-invalid
                @enderror" placeholder="End Date">
                <div class="invalid-feedback">
                    @error('end_date')
                    {{$message}}
                    @enderror
                </div>
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
