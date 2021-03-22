<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Color;

class ColorController extends Controller
{
    public function index() {

        $colors = Color::all();

        return view('pages.color-index', compact('colors'));
    }


    public function show($id) {
        $color = Color::findOrFail($id);
        return view('pages.color-show', compact('color'));
    }

}
