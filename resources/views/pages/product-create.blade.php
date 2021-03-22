@extends('layouts.main-layout')

@section('content')

    <h1>NEW PRODUCT:</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- {{ route('product-store') }} --}}
    <form action="{{ route('product-store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('POST')

        <label for="namepro">namepro</label>
        <input name="namepro" type="text">
        <br>

        <label for="imgpro">imgpro</label>
        <input name="imgpro" type="file">
        <br>


        <label for="color_id">color</label>
        <select name="color_id">
            @foreach ($colors as $color)
                <option value="{{ $color -> id }}">

                    {{$color -> namecol}}

                </option>
            @endforeach
        </select>
        <br>



        <input type="submit">

    </form>

    
@endsection