<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function show($id)
    {
        $product = product::findOrFail($id);
        $relatedProducts = product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();

        return view('frontend.pages.product.single-product', compact('product', 'relatedProducts'));
    }
}
