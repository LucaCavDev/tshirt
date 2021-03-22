<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Product;
use App\Color;

class ProductController extends Controller
{

    public function index() {
        $products = Product::all();
        return view('pages.product-index', compact('products'));
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('pages.product-show', compact('product'));
    }

    public function create() {

        $colors = Color::all();
        return view('pages.product-create', compact('colors'));
    }

    public function store(Request $request) {

        $data = $request -> all();

        //dd($data);

        Validator::make($data, [

            'namepro' => 'required|min:3|max:100',
            'imgpro' => 'required|min:3|max:200',

        ]) -> validate();


        
        $color = Color::findOrFail($data['color_id']);
        $product = Product::make($request -> all());
        $product -> color() -> associate($color);
        $product -> save();

        
        return redirect() -> route('product-show', $product -> id);
    }


    public function edit($id) {

        $colors = Color::all();
        $product = Product::findOrFail($id);

        return view('pages.product-edit', compact('colors', 'product'));


    }


    public function update(Request $request, $id) {
        $data = $request -> all();

        Validator::make($data, [

            'namepro' => 'required|min:3|max:100',
            'imgpro' => 'required|min:3|max:200',

        ]) -> validate();

        $color = Color::findOrFail($data['color_id']);

        $product = Product::findOrFail($id);
        $product -> update($data);

        $product -> color() -> associate($color);
        $product -> save();


        return redirect() -> route('product-show', $product -> id);
    }



}
