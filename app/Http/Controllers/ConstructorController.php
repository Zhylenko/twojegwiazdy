<?php

namespace App\Http\Controllers;

use App\Models\Preset;
use App\Models\Size;
use App\Models\Accessory;
use App\Models\Example;
use App\Models\ExampleTitle;
use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    public function show()
    {
        $presets = Preset::all();
        $sizes = Size::orderBy('price', 'desc')->get();
        $accessories = Accessory::orderBy('price', 'desc')->get();
        $examples = ExampleTitle::all();

        dd($examples[0]->name);

        return view('constructor.show', ['progress' => 1,
                                         'presets' => $presets, 
                                         'sizes' => $sizes, 
                                         'accessories' => $accessories,
                                         'examples' => $examples,]);
    }
}
