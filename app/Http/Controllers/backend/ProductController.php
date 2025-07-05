<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = product::with(['category', 'subcategory'])->get();
        return view('backend.pages.product.index', compact('products'));
    }



    public function create()
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        return view('backend.pages.product.create', compact('categories', 'subcategories'));
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_slug' => 'required|string|max:255|unique:products,slug',
            'product_description' => 'nullable|string',
            'product_short_description' => 'nullable|string',
            'product_sku' => 'required|string|max:255|unique:products,sku',
            'product_price' => 'required|numeric|min:0',
            'product_sale_price' => 'nullable|numeric|min:0|lte:price',
            'product_cost_price' => 'nullable|numeric|min:0',
            'product_stock_quantity' => 'required|integer|min:0',
            'product_min_quantity' => 'required|integer|min:1',
            'product_weight' => 'nullable|numeric|min:0',
            'product_dimensions' => 'nullable|string|max:255',
            'product_is_active' => 'required|boolean',
            'product_is_featured' => 'required|boolean',
            'product_manage_stock' => 'required|boolean',
            'product_stock_status' => 'required|in:in_stock,out_of_stock,on_backorder',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_meta_title' => 'nullable|string|max:255',
            'product_meta_description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);

        if ($request->hasFile('product_image')) {
            $validated['product_image'] = $request->file('product_image')->store('product_images', 'public');
        }


        product::create([
            'name' => $validated['product_name'],
            'slug' => $validated['product_slug'],
            'description' => $validated['product_description'] ?? null,
            'short_description' => $validated['product_short_description'] ?? null,
            'sku' => $validated['product_sku'],
            'price' => $validated['product_price'],
            'sale_price' => $validated['product_sale_price'] ?? null,
            'cost_price' => $validated['product_cost_price'] ?? null,
            'stock_quantity' => $validated['product_stock_quantity'],
            'min_quantity' => $validated['product_min_quantity'],
            'weight' => $validated['product_weight'] ?? null,
            'dimensions' => $validated['product_dimensions'] ?? null,
            'is_active' => $validated['product_is_active'],
            'is_featured' => $validated['product_is_featured'],
            'manage_stock' => $request->has('product_manage_stock'),
            'stock_status' => $validated['product_stock_status'],
            'image' => $validated['product_image'] ?? null,
            'meta_title' => $validated['product_meta_title'] ?? null,
            'meta_description' => $validated['product_meta_description'] ?? null,
            'category_id' => $validated['category_id'],
            'subcategory_id' => $validated['subcategory_id'],
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }


    public function edit(product $product)
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        return view('backend.pages.product.edit', compact('product', 'categories', 'subcategories'));
    }



    public function update(Request $request, product $product)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'product_description' => 'nullable|string',
            'product_short_description' => 'nullable|string',
            'product_sku' => 'required|string|max:255|unique:products,sku,' . $product->id,
            'product_price' => 'required|numeric|min:0',
            'product_sale_price' => 'nullable|numeric|min:0',
            'product_cost_price' => 'nullable|numeric|min:0',
            'product_stock_quantity' => 'required|integer|min:0',
            'product_min_quantity' => 'required|integer|min:1',
            'product_weight' => 'nullable|numeric|min:0',
            'product_dimensions' => 'nullable|string|max:255',
            'product_is_active' => 'required|boolean',
            'product_is_featured' => 'required|boolean',
            'product_manage_stock' => 'required|boolean',
            'product_stock_status' => 'required|in:in_stock,out_of_stock,on_backorder',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_meta_title' => 'nullable|string|max:255',
            'product_meta_description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);

        if ($request->hasFile('product_image')) {
            $validated['product_image'] = $request->file('product_image')->store('product_images', 'public');
        }



        $product->update([
            'name' => $validated['product_name'],
            'slug' => $validated['product_slug'],
            'description' => $validated['product_description'] ?? null,
            'short_description' => $validated['product_short_description'] ?? null,
            'sku' => $validated['product_sku'],
            'price' => $validated['product_price'],
            'sale_price' => $validated['product_sale_price'] ?? null,
            'cost_price' => $validated['product_cost_price'] ?? null,
            'stock_quantity' => $validated['product_stock_quantity'],
            'min_quantity' => $validated['product_min_quantity'],
            'weight' => $validated['product_weight'] ?? null,
            'dimensions' => $validated['product_dimensions'] ?? null,
            'is_active' => $validated['product_is_active'],
            'is_featured' => $validated['product_is_featured'],
            'manage_stock' => $request->has('product_manage_stock'),
            'stock_status' => $validated['product_stock_status'],
            'image' => $validated['product_image'] ?? $product->image,
            'meta_title' => $validated['product_meta_title'] ?? null,
            'meta_description' => $validated['product_meta_description'] ?? null,
            'category_id' => $validated['category_id'],
            'subcategory_id' => $validated['subcategory_id'],
        ]);

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
