<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontOrderController extends Controller
{
    public function index()
    {
        $orders = order::where('user_id', Auth::id())->latest()->get();
        return view('frontend.pages.order.index', compact('orders'));
    }
}
