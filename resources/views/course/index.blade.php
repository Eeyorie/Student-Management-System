{{-- //resources/views/product/index.blade.php --}}
@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Courses</h1>
        <a href="{{ route('course.create') }}" class="btn btn-primary">Add Course</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Description</th>
                <th>Credits</th>
                <th>Instructor</th>
                <th>Semester</th>
                <th>Enrollment Status</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if($course->count() > 0)
                @foreach($course as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->course_name }}</td>
                        <td class="align-middle">{{ $rs->course_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">{{ $rs->credits }}</td>
                        <td class="align-middle">{{ $rs->instructor_id }}</td>
                        <td class="align-middle">{{ $rs->semester}}</td>
                        <td class="align-middle">{{ $rs->max_enrollment }}</td>
                        <td class="align-middle">{{ $rs->start_date }}</td>
                        <td class="align-middle">{{ $rs->end_date }}</td>
                        <td class="align-middle">
                            <div class="btn-group " role="group" aria-label="Basic example">
                                <a href="{{ route('course.show', $rs->id) }}" type="button" class="btn btn-secondary">@lang('public.Detail')</a>
                                <a href="{{ route('course.edit', $rs->id)}}" type="button" class="btn btn-warning">@lang('public.Edit')</a>
                                <form action="{{ route('course.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">@lang('public.Delete')</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="11">Course not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
