@extends('layout.frontend.frontmaster')

@section('frontend_main')




<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Order Details - #{{ $order->id }}</h3>
                        <p class="mb-0">Placed on: {{ $order->created_at->format('d M, Y') }}</p>
                        <p>Status: <strong>{{ ucfirst($order->status) }}</strong></p>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-3">Order Items</h5>
                        <div class="table-responsive mb-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $item)
                                        <tr>
                                            <td>{{ $item->product->name }}</td>
                                            <td>${{ number_format($item->price, 2) }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <h5 class="mb-3">Billing & Shipping</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Billing Address</h6>
                                <address>
                                    {{ $order->billing_address }}<br>
                                    {{ $order->billing_city }}, {{ $order->billing_state }} {{ $order->billing_zip }}<br>
                                    Phone: {{ $order->billing_phone }}
                                </address>
                            </div>
                            <div class="col-md-6">
                                <h6>Shipping Address</h6>
                                <address>
                                    {{ $order->shipping_address }}<br>
                                    {{ $order->shipping_city }}, {{ $order->shipping_state }} {{ $order->shipping_zip }}<br>
                                    Phone: {{ $order->shipping_phone }}
                                </address>
                            </div>
                        </div>

                        <hr>
                        <h5 class="text-end">Order Total: ${{ number_format($order->total, 2) }}</h5>
                        <p class="text-end">Payment: {{ ucfirst($order->payment_method) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   




@endsection