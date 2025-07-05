@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">



                        @php
                            $statuses = ['pending', 'processing', 'shipped', 'delivered', 'cancelled', 'refunded'];
                            $paymentStatuses = ['pending', 'paid', 'failed', 'refunded'];
                        @endphp



                        {{-- form --}}
                        <form method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
                            @CSRF
                            <div class="form-group card-body">
                                <div class="card">



                                    {{-- user name --}}
                                    <div class="card-body">
                                        <label>user name</label>
                                        <select name="user_id" class="form-control" required>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>




                                    {{-- order_number --}}
                                    <div class="card-body">
                                        <label>order_number</label>
                                        <input class="form-control" type="text" placeholder="order_number"
                                            name="order_number" required>
                                    </div>



                                    {{-- status --}}
                                    <div class="card-body">
                                        <label>Order Status</label>
                                        <select class="form-control" name="status" required>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status }}">
                                                    {{ ucfirst($status) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- total_amount --}}
                                    <div class="card-body">
                                        <label>order total_amount</label>
                                        <input class="form-control" type="number" placeholder="order total_amount"
                                            name="order_total_amount" required>
                                    </div>



                                    {{-- tax_amount --}}
                                    <div class="card-body">
                                        <label>order tax_amount</label>
                                        <input class="form-control" type="number" placeholder="order tax_amount"
                                            name="order_tax_amount" required>
                                    </div>



                                    {{-- shipping_amount --}}
                                    <div class="card-body">
                                        <label>order shipping_amount</label>
                                        <input class="form-control" type="number" placeholder="order shipping_amount"
                                            name="order_shipping_amount">
                                    </div>



                                    {{-- discount_amount --}}
                                    <div class="card-body">
                                        <label>order discount_amount</label>
                                        <input class="form-control" type="number" placeholder="order discount_amount"
                                            name="order_discount_amount">
                                    </div>



                                    {{-- currency --}}
                                    <div class="card-body">
                                        <label>order currency</label>
                                        <input class="form-control" type="text" placeholder="order currency"
                                            name="order_currency">
                                    </div>


                                    {{-- payment_status --}}
                                    <div class="card-body">
                                        <label>Payment Status</label>
                                        <select class="form-control" name="order_payment_status">
                                            @foreach ($paymentStatuses as $status)
                                                <option value="{{ $status }}">
                                                    {{ ucfirst($status) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>



                                    {{-- payment_method --}}
                                    <div class="card-body">
                                        <label>order payment_method</label>
                                        <input class="form-control" type="text" placeholder="order payment_method"
                                            name="order_payment_method">
                                    </div>



                                    {{-- notes --}}
                                    <div class="card-body">
                                        <label>order notes</label>
                                        <input class="form-control" type="text" placeholder="order notes"
                                            name="order_notes">
                                    </div>




                                    {{-- shipped_at --}}
                                    <div class="card-body">
                                        <label>Shipped At</label>
                                        <input type="datetime-local" class="form-control" name="order_shipped_at">

                                    </div>


                                    {{-- delivered_at --}}
                                    <div class="card-body">
                                        <label>Delivered At</label>
                                        <input type="datetime-local" class="form-control" name="order_delivered_at">
                                    </div>




                                    {{-- button --}}
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
