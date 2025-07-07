<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{



    public function index()
    {
        $cart = session()->get('cart', []);
        return view('frontend.pages.cart.index', compact('cart'));
    }




    public function addToCart($id)
    {

        if (!Auth::check()) {
            return redirect()->route('login.user');
        }

        $product = Product::findOrFail($id);

        $cart = session('cart', []);

        $cart[$id] = [
            'id' => $product->id,
            'name' => $product->name,
            'quantity' => isset($cart[$id]) ? $cart[$id]['quantity'] + 1 : 1,
            'price' => $product->price,
            'image' => $product->image,
            'description' => $product->description
        ];

        session()->put('cart', $cart);

        // back to home page
        return back();
    }





    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }

        // back to home page
        return redirect()->back();
    }





    
}
