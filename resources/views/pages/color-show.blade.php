@extends('layouts.main-layout')

@section('content')
    <h1>
        COLOR:
        id-> {{ $color -> id }} --- 
        name-> {{ $color -> namecol }} 
    </h1>
    <img src="{{  $color -> imgcol }}" alt="">


    <h2>Products with this color:</h2>

    <ul>
        @foreach ($color -> products as $product)

            <li>
                <a href="{{ route('product-show', $product -> id) }}">
                    
                    {{ $product -> namepro}}
                    
                </a>

            </li>
            
        @endforeach
    </ul>



@endsection