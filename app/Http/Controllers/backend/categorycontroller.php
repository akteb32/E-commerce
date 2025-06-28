<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    

public function index()
{
    $categories = category::all();
    return view('backend.pages.category.index', compact('categories'));
    
}

   public function create()
    {

        return view('backend.pages.category.create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/images');
        }

       $category = Category::create([
            'name' => $request->category_name,
            'image'=> $path,
        ]);
       
        return redirect()->route('category.index');
    }

    
    public function edit(Category $category)
    {
        return view('backend.pages.category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {

         

        $category->update([
            'name' => $request->category_name,
            'updated_at' => now(),

        ]);

        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
 





































    
}
