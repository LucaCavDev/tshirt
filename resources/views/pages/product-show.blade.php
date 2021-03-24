@extends('layouts.main-layout')

@section('content')
    <h1>
        PRODUCT: 
        id-> {{ $product -> id }} ---
        name-> {{ $product -> namepro }} <br>
    </h1>

    <div>
        <div>
            color of this product-> {{ $product -> color -> namecol}}  
        </div>
        <img src="{{ asset($product->color->imgcol )}}" alt="">

    </div>

    <div>
        <div>
            Image uploaded    
        </div>

        <img src="{{ asset('/storage/uploads/' .  $product -> imgpro )}}" alt="imgpro5">
    </div>

@endsection