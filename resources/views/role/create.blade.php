{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Add Role</h1>
    <hr />
    <form action="{{ route('role.store') }}" method="POST" id="Submit">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="role_name" class="form-control @error('role_name')
                    is-invalid
                @enderror" placeholder="Role">
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
               <br>
               <a href="{{ route('role.index') }}" class="btn btn-primary">Back to List</a>
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