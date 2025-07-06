<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\subcategory;
use Illuminate\Http\Request;

class FrontSubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = subcategory::with('category')->get();

        return view('frontend.home', compact('subcategories'));
    }
}
