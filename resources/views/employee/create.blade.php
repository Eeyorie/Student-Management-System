{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">@lang('public.Add Employee')</h1>
    <hr />
    <form action="{{ route('employee.store') }}" method="POST" id="Submit">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="FirstName" class="form-control @error('FirstName')
                    is-invalid
                @enderror" placeholder="@lang('public.First Name')">
                <div class="invalid-feedback">
                    @error('FirstName') 
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="LastName" class="form-control @error('LastName')
                    is-invalid
                @enderror" placeholder="@lang('public.Last Name')">
                <div class="invalid-feedback">
                    @error('LastName') 
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                {{-- <input type="text" name="role_name" class="form-control @error('role_name')
                    is-invalid
                @enderror" placeholder="Roles"> --}}
                <select name="employee_roles_id" class="form-control @error('role_name')
                is-invalid
                @enderror" placeholder="Choose Role">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{$role->role_name}}</option>
                    @endforeach


                </select>
                <div class="invalid-feedback">
                    @error('role_name') 
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="office_id" class="form-control @error('role_name')
                is-invalid
                @enderror" placeholder="Choose Role">
                    @foreach ($offices as $office)
                    <option value="{{ $office->id }}">{{$office->office_name}}</option>
                    @endforeach


                </select>
                <div class="invalid-feedback">
                    @error('role_name') 
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary" id="btnSubmit">@lang('public.Submit')</button>
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