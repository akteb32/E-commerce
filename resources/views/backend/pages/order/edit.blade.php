@extends('backend.layouts.backmaster')

@section('main')

<!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{route('order.update', $order->id)}}" enctype="multipart/form-data">
                            @CSRF
                            @method('PUT')
                            <div class="form-group card-body">
                                <div class="card">

                                    {{-- order_number --}}
                                    <div class="card-body">
                                        <label>order_number</label>
                                        <input class="form-control" type="number" placeholder="order_number"
                                            name="order_number" value="{{$order->order_number}}" required>
                                    </div>


                                    {{-- status --}}
                                    <div class="card-body">
                                        <label>order type</label>
                                        <select class="form-control" name="order_type" >
                                        @foreach($orders as $order)
                                            <option value="{{$order->status}}" {{ $order->status == $currentStatus ? 'selected' : '' }}>{{$order->status}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                      

                                    {{-- total_amount --}}
                                    <div class="card-body">
                                        <label>order total_amount</label>
                                        <input class="form-control" type="number" placeholder="order total_amount" value="{{$order->total_amount}}"
                                            name="order_total_amount" required>
                                    </div>



                                    {{-- tax_amount --}}
                                    <div class="card-body">
                                        <label>order tax_amount</label>
                                        <input class="form-control" type="number" placeholder="order tax_amount" value="{{$order->tax_amount}}"
                                            name="order_tax_amount" required>
                                    </div>



                                    {{-- shipping_amount --}}
                                    <div class="card-body">
                                        <label>order shipping_amount</label>
                                        <input class="form-control" type="number" placeholder="order shipping_amount" value="{{$order->shipping_amount}}"
                                            name="order_shipping_amount" required>
                                    </div>



                                    {{-- discount_amount --}}
                                    <div class="card-body">
                                        <label>order discount_amount</label>
                                        <input class="form-control" type="number" placeholder="order discount_amount" value="{{$order->discount_amount}}"
                                            name="order_discount_amount" required>
                                    </div>



                                    {{-- currency --}}
                                    <div class="card-body">
                                        <label>order currency</label>
                                        <input class="form-control" type="text" placeholder="order currency" value="{{$order->currency}}"
                                            name="order_currency" required>
                                    </div>


                                    {{-- payment_status --}}
                                    <div class="card-body">
                                        <label>order payment_status</label>
                                        <input class="form-control" type="number" placeholder="order payment_status" value="{{$order->payment_status}}"
                                            name="order_payment_status" required>
                                    </div>



                                    {{-- payment_method --}}
                                    <div class="card-body">
                                        <label>order payment_method</label>
                                        <input class="form-control" type="text" placeholder="order payment_method" value="{{$order->payment_method}}"
                                            name="order_payment_method" required>
                                    </div>



                                    {{-- notes --}}
                                    <div class="card-body">
                                        <label>order notes</label>
                                        <input class="form-control" type="text" placeholder="order notes" value="{{$order->notes}}"
                                            name="order_notes" required>
                                    </div>
                                   



                                    {{-- shipped_at --}}
                                    <div class="card-body">
                                        <label>order shipped_at</label>
                                        <input type="datetime" class="form-control" placeholder="shipped_at" value="{{$order->shipped_at}}"
                                            name="order_shipped_at">
                                    </div>


                                    {{-- delivered_at --}}
                                    <div class="card-body">
                                        <label>order delivered_at</label>
                                        <input type="datetime" class="form-control" placeholder="delivered_at" value="{{$order->delivered_at}}"
                                            name="order_delivered_at">
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