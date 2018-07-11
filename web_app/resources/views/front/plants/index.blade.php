@extends('master')

@section('content')
    <div class="title m-b-md">
        Trust'e Pot
    </div>
    <div>
        <h1>Plants index</h1>
    </div>

    @if($plants->isNotEmpty())
<div class = "tab-plants">
    <ul>
        @foreach($plants as $plant)
            <li>
                <strong>{{$plant->name}}</strong>
                <i>{{$plant->latin_name}}</i>
            </li>
            @endforeach
    </ul>
</div>
    @else
        <div class = "no-info">
            <strong>No info  ¯\_(ツ)_/¯</strong>
        </div>
    @endif

    <div class = 'create-plant'>
        <a href = {{route('plants.create')}}>
            Want to add a new plant?
        </a>
    </div>
@endsection