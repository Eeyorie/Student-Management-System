@extends('layouts.app')


@section('body')

<div>
    <h3>{{ Auth::user()->name }}</h3>
</div>

@endsection
