@extends('layouts.main-layout')

@section('content')

    <h1>EDIT PRODUCT {{$product-> namepro}}:</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form action="{{ route('product-update', $product -> id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('POST')

        <label for="namepro">namepro</label>
        <input name="namepro" type="text" value="{{ $product -> namepro }}">
        <br>

        <label for="imgpro">imgpro</label>
        <input name="imgpro" type="file" value="{{ $product -> imgpro }}">
        <br>


        <label for="color_id">color</label>
        <select name="color_id">
            @foreach ($colors as $color)
                <option value="{{ $color -> id }}"
                    @if ($product -> color -> id == $color -> id)
                        selected
                    @endif
                >

                    {{$color -> namecol}}

                </option>
            @endforeach
        </select>
        <br>



        <input type="submit">

    </form>

    
@endsection