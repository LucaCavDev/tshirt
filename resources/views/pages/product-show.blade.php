@extends('layouts.main-layout')

@section('content')
    <h1>
        PRODUCT: 
        id-> {{ $product -> id }} ---
        name-> {{ $product -> namepro }} <br>

        color of this product-> {{ $product -> color -> namecol}}

        
    </h1>
    <img src="{{  $product -> imgpro }}" alt="">



@endsection