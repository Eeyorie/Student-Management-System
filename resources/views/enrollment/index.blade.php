@extends('layouts.app')
@section('body')

<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Enrollment Management</h1>
    <a href="{{ route('enrollment.create') }}" class="btn btn-primary">Add Students</a>
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course</th>
            <th>Enrollment Date</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @if($enrollment->count() > 0)
            @foreach($enrollment as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle" style="display: none">{{ $rs->student_id }}</td>
                    <td class="align-middle">{{ $rs->student->first_name }}</td>
                    <td class="align-middle">{{ $rs->student->last_name }}</td>
                    <td class="align-middle" style="display: none">{{ $rs->course_id }}</td>
                    <td class="align-middle">{{ $rs->course->course_code }}</td>
                    <td class="align-middle">{{ $rs->enrollment_date }}</td>
                    <td class="align-middle">{{ $rs->status }}</td>
                    <td class="align-middle">
                        <div class="btn-group " role="group" aria-label="Basic example">
                            <a href="{{ route('enrollment.show', $rs->id) }}" type="button" class="btn btn-secondary">@lang('public.Detail')</a>
                            <a href="{{ route('enrollment.edit', $rs->id)}}" type="button" class="btn btn-warning">@lang('public.Edit')</a>
                            <form action="{{ route('enrollment.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                <td class="text-center" colspan="7">Student not found</td>
            </tr>
        @endif
    </tbody>
</table>




@endsection
