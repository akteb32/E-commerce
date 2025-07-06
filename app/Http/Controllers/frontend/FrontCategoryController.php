<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class FrontCategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();

        return view('frontend.home', compact('categories'));
    }

    
}
