<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class FrontProductController extends Controller
{
      public function index()
    {
        $products = product::with(['category', 'subcategory'])->get();
        return view('frontend.home', compact('products'));
    }

    
}
