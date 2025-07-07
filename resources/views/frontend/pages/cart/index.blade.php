@extends('frontend.layouts.frontmaster')

@section('main')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Shop
                <span></span> Cart
            </div>
        </div>
    </div>

    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Your Cart</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">
                        There are <span class="text-brand">{{ count($cart) }}</span> products in your cart
                    </h6>
                    <h6 class="text-body">
                        <a href="{{ route('cart.clear') }}" class="text-muted">
                            <i class="fi-rs-trash mr-5"></i>Clear Cart
                        </a>
                    </h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

                <div class="table-responsive shopping-summery">
                    <table class="table table-wishlist">
                        <thead>
                            <tr class="main-heading">
                                <th></th>
                                <th colspan="2">Product</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th class="end">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach ($cart as $item)
                                @php
                                    $subtotal = $item['price'] * $item['quantity'];
                                    $total += $subtotal;
                                @endphp
                                <tr>
                                    <td></td>
                                    <td class="image product-thumbnail">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" width="100">
                                    </td>
                                    <td class="product-des product-name">
                                        <h6 class="mb-5">
                                            <a class="product-name mb-10 text-heading" href="#">
                                                {{ $item['name'] }}
                                            </a>
                                        </h6>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h4 class="text-body">${{ number_format($item['price'], 2) }}</h4>
                                    </td>
                                    <td class="text-center detail-info">
                                        <form action="{{ route('cart.update') }}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                                            <div class="detail-qty border radius">
                                                <button class="qty-down" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); this.form.submit(); return false;">
                                                    <i class="fi-rs-angle-small-down"></i>
                                                </button>
                                                <input type="number" name="quantity" class="qty-val" value="{{ $item['quantity'] }}" min="1">
                                                <button class="qty-up" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); this.form.submit(); return false;">
                                                    <i class="fi-rs-angle-small-up"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="price" data-title="Subtotal">
                                        <h4 class="text-brand">${{ number_format($subtotal, 2) }}</h4>
                                    </td>
                                    <td class="action text-center" data-title="Remove">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                                            <button type="submit" class="text-body border-0 bg-transparent">
                                                <i class="fi-rs-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if(count($cart) === 0)
                                <tr>
                                    <td colspan="7" class="text-center">Your cart is empty.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                {{-- Cart Totals --}}
                <div class="row mt-50">
                    <div class="col-lg-5">
                        <div class="p-40">
                            <h4 class="mb-10">Apply Coupon</h4>
                            <p class="mb-30"><span class="font-lg text-muted">Using a promo code?</span></p>
                            <form action="#">
                                <div class="d-flex justify-content-between">
                                    <input class="font-medium mr-15 coupon" name="coupon" placeholder="Enter Your Coupon">
                                    <button class="btn"><i class="fi-rs-label mr-10"></i>Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="border p-md-4 cart-totals ml-30">
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Subtotal</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">${{ number_format($total, 2) }}</h4>
                                        </td>
                                    </tr>
                                    <tr><td colspan="2"><div class="divider-2 my-10"></div></td></tr>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Shipping</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h5 class="text-heading text-end">Free</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">${{ number_format($total, 2) }}</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('checkout.index') }}" class="btn mb-20 w-100">Proceed To Checkout <i class="fi-rs-sign-out ml-15"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
