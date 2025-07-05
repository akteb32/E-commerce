<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{



    public function index()
    {
        $subcategories = subcategory::with('category')->get();

        return view('backend.pages.subcategory.index', compact('subcategories'));
    }


    public function create()
    {
        $categories = category::all();
        return view('backend.pages.subcategory.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'subcategory_name' => 'required|string|max:255',
            'subcategory_slug' => 'required|string|max:255|unique:subcategories,slug',
            'subcategory_description' => 'nullable|string',
            'subcategory_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subcategory_is_active' => 'required|boolean',
            'subcategory_sort_order' => 'nullable|integer|min:0',
            'subcategory_meta_title' => 'nullable|string|max:255',
            'subcategory_meta_description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('subcategory_image')) {
            $validated['subcategory_image'] = $request->file('subcategory_image')->store('subcategory_images', 'public');
        }

        subcategory::create([
            'name' => $validated['subcategory_name'],
            'slug' => $validated['subcategory_slug'],
            'description' => $validated['subcategory_description'] ?? null,
            'image' => $validated['subcategory_image'] ?? null,
            'is_active' => $validated['subcategory_is_active'],
            'sort_order' => $validated['subcategory_sort_order'] ?? 0,
            'meta_title' => $validated['subcategory_meta_title'] ?? null,
            'meta_description' => $validated['subcategory_meta_description'] ?? null,

            'category_id' => $validated['category_id'],

        ]);

        return redirect()->route('subcategory.index')->with('success', 'Subcategory created successfully.');
    }



    public function edit(subcategory $subcategory)
    {
        $categories = Category::all();
        return view('backend.pages.subcategory.edit', compact('subcategory','categories'));
    }

    public function update(Request $request, subcategory $subcategory)
    {
        $validated = $request->validate([
            'subcategory_name' => 'required|string|max:255',
            'subcategory_slug' => 'required|string|max:255|unique:subcategories,slug,'. $subcategory->id,
            'subcategory_description' => 'nullable|string',
            'subcategory_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subcategory_is_active' => 'required|boolean',
            'subcategory_sort_order' => 'nullable|integer|min:0',
            'subcategory_meta_title' => 'nullable|string|max:255',
            'subcategory_meta_description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',

        ]);

        if ($request->hasFile('subcategory_image')) {
            $validated['subcategory_image'] = $request->file('subcategory_image')->store('subcategory_images', 'public');
        }


        $subcategory->update([
            'name' => $validated['subcategory_name'],
            'slug' => $validated['subcategory_slug'],
            'description' => $validated['subcategory_description'] ?? null,
            'image' => $validated['subcategory_image'] ?? null,
            'is_active' => $validated['subcategory_is_active'],
            'sort_order' => $validated['subcategory_sort_order'] ?? 0,
            'meta_title' => $validated['subcategory_meta_title'] ?? null,
            'meta_description' => $validated['subcategory_meta_description'] ?? null,

            'category_id' => $validated['category_id'],

            
        ]);

        return redirect()->route('subcategory.index');

    }




    public function destroy(subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategory.index');
    }




















}
