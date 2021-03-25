<?php

namespace App\Http\Controllers;

use App\Models\Preset;
use App\Models\Size;
use App\Models\Accessory;
use App\Models\ExampleTitle;
use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    //Constructor page
    public function show()
    {
        $presets = Preset::all();
        $sizes = Size::orderBy('price', 'desc')->get();
        $accessories = Accessory::orderBy('price', 'desc')->get();
        $examples = ExampleTitle::all();

        return view('constructor.show', ['progress' => 1,
                                         'presets' => $presets, 
                                         'sizes' => $sizes, 
                                         'accessories' => $accessories,
                                         'examples' => $examples,]);
    }

    //Order page
    public function order()
    {
        return view('constructor.order', ['progress' => 2]);
    }

    //Success page
    public function success(Request $request)
    {
        if($request->session()->get('success', false) === true)
            return view('constructor.success', ['progress' => 3]);
        else
            return redirect(route('order'));
    }
}
