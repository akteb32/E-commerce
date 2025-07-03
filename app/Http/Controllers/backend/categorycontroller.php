<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
    $validated = $request->validate([
        'category_name' => 'required|string|max:255',
        'category_slug' => 'required|string|max:255|unique:categories,slug',
        'category_description' => 'nullable|string',
        'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'category_is_active' => 'required|boolean',
        'category_sort_order' => 'nullable|integer|min:0',
        'category_meta_title' => 'nullable|string|max:255',
        'category_meta_description' => 'nullable|string',
    ]);

    if ($request->hasFile('category_image')) {
        $validated['category_image'] = $request->file('category_image')->store('category_images', 'public');
    }

    Category::create([
        'name' => $validated['category_name'],
        'slug' => $validated['category_slug'],
        'description' => $validated['category_description'] ,
        'image' => $validated['category_image'] ,
        'is_active' => $validated['category_is_active'],
        'sort_order' => $validated['category_sort_order'] ?? 0,
        'meta_title' => $validated['category_meta_title'] ?? null,
        'meta_description' => $validated['category_meta_description'] ?? null,
    ]);

    return redirect()->route('category.index')->with('success', 'Category created successfully.');
}





















}
