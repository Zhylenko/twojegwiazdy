<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function show()
    {
        $faqs = Faq::all();
        return view('faq.show', ['faqs' => $faqs]);
    }
}
