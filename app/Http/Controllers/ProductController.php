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

        $request -> all();

        $request->validate([
            'namepro' => 'required|min:6|max:100',
            'imgpro' => 'mimes:jpeg,jpg,png,gif|required|max:2048',

        ]);
        
        $newProduct = Product::make($request -> all());
        $color = Color::findOrFail($request['color_id']);

        if ($request->hasfile('imgpro')) {
            $img = $request -> file('imgpro');

            $ext = $img -> getClientOriginalExtension();
            $name = rand(100000, 999999) . '_' . time();
            $fileName = $name . '.' . $ext;
    
            $img -> storeAs('public/uploads/', $fileName);
            $newProduct -> imgpro = $fileName;
        } else {
            return $request;
            $newProduct->imgpro = '';
        }
        $newProduct -> color() -> associate($color);

        $newProduct -> save();

 
        return redirect() -> route('product-show', $newProduct -> id);//  route('product-index');
    }


    public function edit($id) {

        $colors = Color::all();
        $product = Product::findOrFail($id);

        return view('pages.product-edit', compact('colors', 'product'));


    }


    public function update(Request $request, $id) {
        // $request -> all();
        $request->validate([

            'namepro' => 'required|min:6|max:100',
            'imgpro' => 'mimes:jpeg,jpg,png,gif|required|max:2048',

        ]);

        $product = Product::findOrFail($id);
        $color = Color::findOrFail($request['color_id']);


        $product->namepro = $request->input('namepro');
        
        if ($request->hasfile('imgpro')) {
            $img = $request -> file('imgpro');

            $ext = $img -> getClientOriginalExtension();
            $name = rand(100000, 999999) . '_' . time();
            $fileName = $name . '.' . $ext;
    
            $img -> storeAs('public/uploads/', $fileName);
            $product -> imgpro = $fileName;
        } else {
            return $request;
            $product->imgpro = '';
        }
        $product -> color() -> associate($color);
        $product -> update();


        return redirect() -> route('product-show', $product -> id);
    }



    public function delete($id) {
        $product = Product::findOrFail($id);
        $product -> delete();
        return redirect() -> route('product-index');
    }


}
