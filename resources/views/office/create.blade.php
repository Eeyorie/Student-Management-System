{{-- //resources/views/product/create.blade.php --}}
@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Office</h1>
    <hr />
    <form action="{{ route('office.store') }}" method="POST" id="Submit">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div> --}}
            <div class="col">
                <input type="text" name="office_name" class="form-control @error('office_name')
                    is-invalid
                @enderror" placeholder="Name">
                <div class="invalid-feedback">
                    @error('office_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="office_address" class="form-control @error('office_address')
                    is-invalid
                @enderror" placeholder="Address">
                <div class="invalid-feedback">
                    @error('office_address')
                    {{$message}}
                    @enderror
                </div>
            </div>
            {{-- <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div> --}}
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="office_number" class="form-control @error('office_number')
                    is-invalid
                @enderror" placeholder="Contact Number">
                <div class="invalid-feedback">
                    @error('office_number')
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
