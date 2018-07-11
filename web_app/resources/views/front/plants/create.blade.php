@extends('master')

@section('content')
    <div>
        <h1>Register a new Plant</h1>
    </div>

    <div>

        {!! form_start($form) !!}
        {!! form_end($form, true) !!}
    </div>
@endsection