{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h2 class="mb-0">Faculty Details</h2>
    <hr />
    <form action="{{ route('faculty.store') }}" method="POST" id="Submit">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="first_name" class="form-control @error('first_name')
                    is-invalid
                @enderror" placeholder="First Name">
                <div class="invalid-feedback">
                    @error('first_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control @error('last_name')
                    is-invalid
                @enderror" placeholder="Last Name">
                <div class="invalid-feedback">
                    @error('last_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="date_of_birth" class="form-control @error('date_of_birth')
                    is-invalid
                @enderror" placeholder="Date of Birth">
                <div class="invalid-feedback">
                    @error('date_of_birth')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control @error('email')
                    is-invalid
                @enderror" placeholder="Email">
                <div class="invalid-feedback">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="text" name="phone_number" class="form-control @error('phone_number')
                    is-invalid
                @enderror" placeholder="Contact Number">
                <div class="invalid-feedback">
                    @error('phone_number')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col">
                <input type="text" name="department" class="form-control @error('department')
                    is-invalid
                @enderror" placeholder="Department">
                <div class="invalid-feedback">
                    @error('department')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="position" class="form-control @error('position')
                    is-invalid
                @enderror" placeholder="Position">
                <div class="invalid-feedback">
                    @error('position')
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
