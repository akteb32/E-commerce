@extends('frontend.layouts.frontmaster')

@section('main')

<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">My Orders</h3>
                    </div>
                    <div class="card-body">
                        @if ($orders->isEmpty())
                            <div class="alert alert-info text-center">
                                You have no orders yet.
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Order #</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>#{{ $order->id }}</td>
                                                <td>{{ $order->created_at?->format('d M, Y') }}</td>
                                                <td>
                                                    <span class="badge 
                                                        @if($order->status == 'pending') bg-warning
                                                        @elseif($order->status == 'shipped') bg-info
                                                        @elseif($order->status == 'delivered') bg-success
                                                        @elseif($order->status == 'cancelled') bg-danger
                                                        @else bg-secondary
                                                        @endif">
                                                        {{ ucfirst($order->status) }}
                                                    </span>
                                                </td>
                                                <td>${{ number_format($order->total, 2) }}</td>
                                                <td>{{ ucfirst($order->payment_method) }}</td>
                                                <td>
                                                    <a href="{{ route('user.order.show', $order->id) }}" class="btn btn-sm btn-primary">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
