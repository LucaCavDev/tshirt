@extends('layouts.main-layout')

@section('content')

<h1>PRODUCTS:</h1>

<a href=" {{ route('product-create') }} ">
    CREATE NEW PRODUCT
</a>

<ul>

    @foreach ($products as $product)

        <li>
            <a href="{{ route('product-show', $product -> id) }}">
                id-> {{ $product -> id }} ---
                name-> {{ $product -> namepro }} <br>
            </a>
            <a href="{{ route('product-edit', $product -> id) }}">
                -------------EDIT
            </a>
            <a href="{{ route('product-delete', $product -> id) }}">
                -------------DELETE
            </a>



        </li>
        

    @endforeach

</ul>


@endsection