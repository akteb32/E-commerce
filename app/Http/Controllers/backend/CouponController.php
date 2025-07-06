<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = coupon::all();

        return view('backend.pages.coupon.index', compact('coupons'));
    }


    public function create()
    {
        return view('backend.pages.coupon.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'coupon_code' => 'required|string|max:255|unique:coupons,code',
            'coupon_type' => 'required|in:fixed,percentage',
            'coupon_value' => 'required',
            'coupon_minimum_amount' => 'nullable',
            'coupon_usage_limit' => 'nullable',
            'coupon_used_count' => 'required|integer|min:0',
            'coupon_is_active' => 'required|boolean',
            'coupon_starts_at' => 'nullable',
            'coupon_expires_at' => 'nullable',
        ]);


        coupon::create([
            'code' => $validated['coupon_code'],
            'type' => $validated['coupon_type'],
            'value' => $validated['coupon_value'],
            'minimum_amount' => $validated['coupon_minimum_amount'],
            'usage_limit' => $validated['coupon_usage_limit'],
            'used_count' => $validated['coupon_used_count'],
            'is_active' => $validated['coupon_is_active'],
            'starts_at' => $validated['coupon_starts_at'],
            'expires_at' => $validated['coupon_expires_at'],


        ]);

        return redirect()->route('coupon.index')->with('success', 'Coupon created successfully.');
    }


    public function edit(coupon $coupon)
    {
        return view('backend.pages.coupon.edit', compact('coupon'));
    }

    public function update(Request $request, coupon $coupon)
    {
        $validated = $request->validate([
            'coupon_code' => 'required|string|max:255|unique:coupons,code,' . $coupon->id,
            'coupon_type' => 'required|in:fixed,percentage',
            'coupon_value' => 'required',
            'coupon_minimum_amount' => 'nullable',
            'coupon_usage_limit' => 'nullable',
            'coupon_used_count' => 'required|integer|min:0',
            'coupon_is_active' => 'required|boolean',
            'coupon_starts_at' => 'nullable',
            'coupon_expires_at' => 'nullable',
        ]);



        $coupon->update([
            'code' => $validated['coupon_code'],
            'type' => $validated['coupon_type'],
            'value' => $validated['coupon_value'],
            'minimum_amount' => $validated['coupon_minimum_amount'],
            'usage_limit' => $validated['coupon_usage_limit'],
            'used_count' => $validated['coupon_used_count'],
            'is_active' => $validated['coupon_is_active'],
            'starts_at' => $validated['coupon_starts_at'],
            'expires_at' => $validated['coupon_expires_at'],


        ]);

        return redirect()->route('coupon.index');
    }




    public function destroy(coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('coupon.index');
    }
}
