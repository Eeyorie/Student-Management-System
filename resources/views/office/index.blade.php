{{-- //resources/views/product/index.blade.php --}}
@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Office List</h1>
        <a href="{{ route('office.create') }}" class="btn btn-primary">Add Office</a>
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
                <th>Office Name</th>
                <th>Office Address</th>
                <th>Office Number</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if($office->count() > 0)
                @foreach($office as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->office_name }}</td>
                        <td class="align-middle">{{ $rs->office_address }}</td>
                        <td class="align-middle">{{ $rs->office_number }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('office.show', $rs->id) }}" type="button" class="btn btn-secondary">@lang('public.Detail')</a>
                                <a href="{{ route('office.edit', $rs->id)}}" type="button" class="btn btn-warning">@lang('public.Edit')</a>
                                <form action="{{ route('office.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Office not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection