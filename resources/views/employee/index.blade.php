{{-- //resources/views/product/index.blade.php --}}
@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">@lang('public.List Employees')</h1>
        <a href="{{ route('employee.create') }}" class="btn btn-primary">@lang('public.Add Employees')</a>
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
                <th>Role</th>
                <th>Office</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if($employee->count() > 0)
                @foreach($employee as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->FirstName }}</td>
                        <td class="align-middle">{{ $rs->LastName }}</td>
                        <td class="align-middle">{{ $rs->role->role_name }}</td>
                        <td class="align-middle">{{ $rs->office->office_name }}</td>
                        <td class="align-middle">
                            <div class="btn-group " role="group" aria-label="Basic example">
                                <a href="{{ route('employee.show', $rs->id) }}" type="button" class="btn btn-secondary">@lang('public.Detail')</a>
                                <a href="{{ route('employee.edit', $rs->id)}}" type="button" class="btn btn-warning">@lang('public.Edit')</a>
                                <form action="{{ route('employee.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">@lang('public.Employee not found')</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection