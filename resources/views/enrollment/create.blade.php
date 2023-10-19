{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Enrollment Details</h2>
    <hr />
    <form action="{{ route('enrollment.store') }}" method="POST" id="Submit">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <select name="student_id" class="form-control @error('student_id')
                is-invalid
                @enderror" placeholder="Choose Role">
                    @foreach ($student as $st)
                    <option value="{{ $st->id }}">{{$st->first_name}} {{$st->last_name}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('student_id')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="course_id" class="form-control @error('course_id')
                is-invalid
                @enderror" placeholder="Choose Role">
                    @foreach ($course as $cour)
                    <option value="{{ $cour->id }}">{{$cour->course_code}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('course_id')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <select name="status" class="form-control @error('status')
                is-invalid
                @enderror" placeholder="Choose Role">
                    <option value=" "></option>
                    <option value="Enrolled">Enrolled</option>
                    <option value="Dropped">Dropped</option>
                    <option value="Withdrawn">Withdrawn</option>
                    <option value="Completed">Completed</option>
                </select>
                <div class="invalid-feedback">
                    @error('status')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="date" name="enrollment_date" class="form-control @error('enrollment_date')
                    is-invalid
                @enderror" placeholder="Date of Birth">
                <div class="invalid-feedback">
                    @error('enrollment_date')
                    {{$message}}
                    @enderror
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
