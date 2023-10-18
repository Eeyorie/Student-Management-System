{{-- //resources/views/product/index.blade.php --}}
@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Students</h1>
        <a href="{{ route('student.create') }}" class="btn btn-primary">Add Students</a>
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
                <th>@lang('public.First Name')</th>
                <th>@lang('public.Last Name')</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Enrollment Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if($student->count() > 0)
                @foreach($student as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->first_name }}</td>
                        <td class="align-middle">{{ $rs->last_name }}</td>
                        <td class="align-middle">{{ $rs->gender }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->enrollment_date }}</td>
                        <td class="align-middle">
                            <div class="btn-group " role="group" aria-label="Basic example">
                                <a href="{{ route('student.show', $rs->id) }}" type="button" class="btn btn-secondary">@lang('public.Detail')</a>
                                <a href="{{ route('student.edit', $rs->id)}}" type="button" class="btn btn-warning">@lang('public.Edit')</a>
                                <form action="{{ route('student.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
