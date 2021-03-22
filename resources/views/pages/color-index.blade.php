@extends('layouts.main-layout')

@section('content')

    <h1>Colors:</h1>

    {{-- <a href=" {{ route('emp-create') }} ">
        CREATE NEW EMPLOYEE
    </a> --}}

    <ul>

        @foreach ($colors as $color)

            <li>
                <a href="{{ route('color-show', $color -> id) }}">
                    {{ $color -> namecol }}
                </a>
                {{-- 
                <a href="{{ route('emp-edit', $emp -> id) }}">
                    --------------EDIT
                </a> 
                --}}


            </li>

        @endforeach
    

    </ul>


@endsection