<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\subcategory;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index()
    {
        $products = product::with('subcategory')->get();
        return view('pages.product.index', compact('products'));
    }

    public function create()
    {
        $subcategories = subcategory::all();
        dd($subcategories);
        return view('pages.product.create', compact('subcategories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'subcategory_id' => 'required',
        ]);

        Product::create([
            'name' => $request->product_name,
            'description' => $request->description_name,
            'price' => $request->price_name,
            'stock' => $request->stock_name,
            'subcategory_id' => $request->subcategory_id,
        ]);

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        $subcategories = Subcategory::all();
        return view('pages.product.edit', compact('product', 'subcategories'));
    }

    public function update(Request $request, Product $product)
    {


        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'subcategory_id' => 'required',
        ]);


        $product->update([
            'name' => $request->product_name,
            'description' => $request->description_name,
            'price' => $request->price_name,
            'stock' => $request->stock_name,
            'subcategory_id' => $request->subcategory_id,
        ]);

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {

        $product->delete();
        return redirect()->route('product.index');
    }}
