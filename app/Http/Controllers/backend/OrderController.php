<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{



public function index()
    {
        $orders = order::with('user')->get();
        return view('backend.pages.order.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        return view('backend.pages.order.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255|unique:orders,order_number',
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled,refunded',
            'order_total_amount' => 'required|numeric|min:0',
            'order_tax_amount' => 'nullable|numeric|min:0',
            'order_shipping_amount' => 'nullable|numeric|min:0',
            'order_discount_amount' => 'nullable|numeric|min:0',
            'order_currency' => 'required|string|size:3',
            'order_payment_status' => 'required|in:pending,paid,failed,refunded',
            'order_payment_method' => 'nullable|string|max:50',
            'order_notes' => 'nullable|string',
            'order_shipped_at' => 'nullable|date',
            'order_delivered_at' => 'nullable|date|after_or_equal:order_shipped_at',
            'user_id' => 'required|exists:users,id',
        ]);

        order::create([
            
            'order_number' => $validated['order_number'],
            'status' => $validated['status'],
            'total_amount' => $validated['order_total_amount']?? 0,
            'tax_amount' => $validated['order_tax_amount']?? 0,
            'shipping_amount' => $validated['order_shipping_amount'],
            'discount_amount' => $validated['order_discount_amount'] ?? 0,
            'currency' => $validated['order_currency'] ?? null,
            'payment_status' => $validated['order_payment_status'] ,
            'payment_method' => $validated['order_payment_method'] ,
            'notes' => $validated['order_notes'] ?? null,
            'shipped_at' => $validated['order_shipped_at'] ?? null,
            'delivered_at' => $validated['order_delivered_at'] ?? null,
            'user_id' => $validated['user_id'] ,
        ]);

        return redirect()->route('order.index')->with('success', 'Order created successfully.');
    }

    public function edit(order $order)
    {
        $users = User::all();
        return view('backend.pages.order.edit', compact('order', 'users'));
    }

    public function update(Request $request, order $order)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255|unique:orders,order_number,' . $order->id,
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled,refunded',
            'order_total_amount' => 'required|numeric|min:0',
            'order_tax_amount' => 'nullable|numeric|min:0',
            'order_shipping_amount' => 'nullable|numeric|min:0',
            'order_discount_amount' => 'nullable|numeric|min:0',
            'order_currency' => 'required|string|size:3',
            'order_payment_status' => 'required|in:pending,paid,failed,refunded',
            'order_payment_method' => 'nullable|string|max:50',
            'order_notes' => 'nullable|string',
            'order_shipped_at' => 'nullable|date',
            'order_delivered_at' => 'nullable|date|after_or_equal:order_shipped_at',
            'user_id' => 'required|exists:users,id',
        ]);

        $order->update([

            'order_number' => $validated['order_number'],
            'status' => $validated['status'],
            'total_amount' => $validated['order_total_amount']?? 0,
            'tax_amount' => $validated['order_tax_amount']?? 0,
            'shipping_amount' => $validated['order_shipping_amount'],
            'discount_amount' => $validated['order_discount_amount'] ?? 0,
            'currency' => $validated['order_currency'] ?? null,
            'payment_status' => $validated['order_payment_status'] ,
            'payment_method' => $validated['order_payment_method'] ,
            'notes' => $validated['order_notes'] ?? null,
            'shipped_at' => $validated['order_shipped_at'] ?? null,
            'delivered_at' => $validated['order_delivered_at'] ?? null,
            'user_id' => $validated['user_id'] ,
        ]);

        return redirect()->route('order.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(order $order)
    {
        $order->delete();
        return redirect()->route('order.index')->with('success', 'Order deleted successfully.');
    }















}
