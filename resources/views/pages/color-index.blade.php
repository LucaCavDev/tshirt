@extends('layouts.main-layout')

@section('content')

    <h1>Colors:</h1>

    {{-- <a href=" {{ route('emp-create') }} ">
        CREATE NEW EMPLOYEE
    </a> --}}

    <ul class="row">

        @foreach ($colors as $color)

            <li class=" col-12 col-md-6">
                <a href="{{ route('color-show', $color -> id) }}">
                    <div>{{ $color -> namecol }}</div>
                    <img src="{{asset( $color -> imgcol )}}" alt="">

                </a>


            </li>

        @endforeach
    

    </ul>


@endsection