@extends('frontend.layouts.frontmaster')

@section('main')

<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Checkout
        </div>
    </div>
</div>

<div class="container mb-80 mt-50">
    {{-- Header --}}
    <div class="row">
        <div class="col-lg-8 mb-40">
            <h3 class="heading-2 mb-10">Checkout</h3>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are {{ count($cart) }} products in your cart</h6>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Billing Form --}}
        <div class="col-lg-7">
            <div class="row">
                <h4 class="mb-30">Billing Details</h4>
                <form method="POST" action="{{ route('checkout.placeOrder') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="name" class="form-control" required placeholder="Your Name *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" name="email" class="form-control" required placeholder="Email *">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="phone" class="form-control" required placeholder="Phone *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" name="address" class="form-control" required placeholder="Address *">
                        </div>
                    </div>

                    <div class="form-group mb-30">
                        <textarea name="notes" class="form-control" rows="4" placeholder="Additional information (optional)"></textarea>
                    </div>

                    {{-- Payment Options --}}
                    <div class="payment">
                        <h4 class="mb-20">Payment Method</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" value="bank" checked>
                            <label class="form-check-label">Direct Bank Transfer</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" value="cod">
                            <label class="form-check-label">Cash on Delivery</label>
                        </div>
                        <div class="form-check mb-20">
                            <input class="form-check-input" type="radio" name="payment_method" value="online">
                            <label class="form-check-label">Online Gateway</label>
                        </div>

                        <button type="submit" class="btn btn-fill-out btn-block">Place Order <i class="fi-rs-sign-out ml-15"></i></button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Order Summary --}}
        <div class="col-lg-5">
            <div class="border p-40 cart-totals ml-30 mb-50">
                <h4 class="mb-30">Your Order</h4>

                <table class="table no-border">
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach ($cart as $item)
                            @php
                                $subtotal = $item['price'] * $item['quantity'];
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td><img src="{{ $item['image'] }}" width="60"></td>
                                <td>
                                    <h6 class="mb-0">{{ $item['name'] }}</h6>
                                    <small>Qty: {{ $item['quantity'] }}</small>
                                </td>
                                <td>
                                    <h6 class="text-brand">${{ number_format($subtotal, 2) }}</h6>
                                </td>
                            </tr>
                        @endforeach
                        <tr><td colspan="3"><hr></td></tr>
                        <tr>
                            <td colspan="2"><strong>Total</strong></td>
                            <td><strong class="text-brand">${{ number_format($total, 2) }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
