<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function placeOrder(Request $request)
{
    
    session()->forget('cart');

    return redirect()->route('home');
}













}
