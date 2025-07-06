<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\shipping_address;
use Illuminate\Http\Request;

class ShippingController extends Controller
{


    public function index()
    {
        $shipping_addresses = shipping_address::with('order')->get();

        return view('backend.pages.shipping.index', compact('shipping_addresses'));
    }




    public function create()
    {
        $orders = order::all();
        return view('backend.pages.shipping.create', compact('orders'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'shipping_address_first_name' => 'required|string|max:100',
            'shipping_address_last_name' => 'required|string|max:100',
            'shipping_address_company' => 'nullable|string|max:100',
            'shipping_address_line_1' => 'required|string|max:255',
            'shipping_address_line_2' => 'nullable|string|max:255',
            'shipping_address_city' => 'required|string|max:100',
            'shipping_address_state' => 'nullable|string|max:100',
            'shipping_address_postal_code' => 'required|string|max:20',
            'shipping_address_country' => 'required|string|max:100',
            'shipping_address_phone' => 'nullable|string|max:20',
            'order_id' => 'required|exists:orders,id'
        ]);



        shipping_address::create([
            'first_name' => $validated['shipping_address_first_name'],
            'last_name' => $validated['shipping_address_last_name'],
            'company' => $validated['shipping_address_company'],
            'address_line_1' => $validated['shipping_address_line_1'],
            'address_line_2' => $validated['shipping_address_line_2'],
            'city' => $validated['shipping_address_city'],
            'state' => $validated['shipping_address_state'],
            'postal_code' => $validated['shipping_address_postal_code'],
            'country' => $validated['shipping_address_country'],
            'phone' => $validated['shipping_address_phone'],
            'order_id' => $validated['order_id']


        ]);

        return redirect()->route('shipping.index')->with('success', 'shipping address created successfully.');
    }








    public function edit(shipping_address $shipping_address)
    {
        $orders = order::all();
        return view('backend.pages.shipping.edit', compact('shipping_address', 'orders'));
    }




    public function update(Request $request, shipping_address $shipping_address)
    {
        $validated = $request->validate([
            'shipping_address_first_name' => 'required|string|max:100',
            'shipping_address_last_name' => 'required|string|max:100',
            'shipping_address_company' => 'nullable|string|max:100',
            'shipping_address_line_1' => 'required|string|max:255',
            'shipping_address_line_2' => 'nullable|string|max:255',
            'shipping_address_city' => 'required|string|max:100',
            'shipping_address_state' => 'nullable|string|max:100',
            'shipping_address_postal_code' => 'required|string|max:20',
            'shipping_address_country' => 'required|string|max:100',
            'shipping_address_phone' => 'nullable|string|max:20',
            'order_id' => 'required|exists:orders,id'

        ]);

        $shipping_address->update([

            'first_name' => $validated['shipping_address_first_name'],
            'last_name' => $validated['shipping_address_last_name'],
            'company' => $validated['shipping_address_company'],
            'address_line_1' => $validated['shipping_address_line_1'],
            'address_line_2' => $validated['shipping_address_line_2'],
            'city' => $validated['shipping_address_city'],
            'state' => $validated['shipping_address_state'],
            'postal_code' => $validated['shipping_address_postal_code'],
            'country' => $validated['shipping_address_country'],
            'phone' => $validated['shipping_address_phone'],
            'order_id' => $validated['order_id']

        ]);

        return redirect()->route('shipping.index')->with('success', 'shipping address update successfully.');
    }









    public function destroy(shipping_address $shipping_address)
    {
        $shipping_address->delete();
        return redirect()->route('shipping.index');
    }
}
