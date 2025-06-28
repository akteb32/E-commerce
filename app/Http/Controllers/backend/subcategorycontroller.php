<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;

class subcategorycontroller extends Controller
{
   
     public function index()
    {
        $subcategories = Subcategory::with('category')->get();
        return view('pages.subcategory.index', compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.subcategory.create', compact('categories'));
    }

    public function store(Request $request)
    {

         $request->validate([
            'subcategory_name' => 'required',
            'category_id' => 'required',

        ]);

        Subcategory::create([
            'name' => $request->subcategory_name,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('subcategory.index');
    }

    public function edit(subcategory $subcategory)
    {
        $categories = category::all();
        return view('pages.subcategory.edit', compact('subcategory', 'categories'));
    }

    public function update(Request $request, Subcategory $subcategory)
    {

        $request->validate([
            'subcategory_name' => 'required',
            'category_id' => 'required',
        ]);

        $subcategory->update([
            'name' => $request->subcategory_name,
        ]);

        return redirect()->route('subcategory.index');
    }

    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategory.index');
    }


}
