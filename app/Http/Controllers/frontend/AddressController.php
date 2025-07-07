<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\shipping_address;
use Illuminate\Http\Request;

class AddressController extends Controller
{


     public function index()
    {
        $shippingAddress = shipping_address::with('order')->get();

        return view('frontend.pages.address.index', compact('shippingAddress'));
    }
}
     

