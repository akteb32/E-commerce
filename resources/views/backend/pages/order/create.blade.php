@extends('layout.backend.backmaster')

@section('backend_main')




    <form method="POST" action="{{route('order.store')}}">
        @CSRF
        <div class="form-group card-body">
            <div class="card">

                <div class="form-group">
                    <label>order_number</label>
                    <input type="text" class="form-control" placeholder="Enter order_number" name="order_number" required>
                </div>
                <div class="form-group">
                    <label>order status</label>
                    <input type="text" class="form-control" placeholder="order status" name="order_status" required>
                </div>
                <div class="form-group">
                    <label>order total_amount</label>
                    <input type="text" class="form-control" placeholder="order total_amount" name="order_total_amount"
                        required>
                </div>
                <div class="form-group">
                    <label>order tax_amount</label>
                    <input type="text" class="form-control" placeholder="order tax_amount" name="order_tax_amount" required>
                </div>
                <div class="form-group">
                    <label>order shipping_amount</label>
                    <input type="text" class="form-control" placeholder="order shipping_amount" name="order_shipping_amount"
                        required>
                </div>
                <div class="form-group">
                    <label>order discount_amount</label>
                    <input type="text" class="form-control" placeholder="order discount_amount" name="order_discount_amount"
                        required>
                </div>
                <div class="form-group">
                    <label>order currency</label>
                    <input type="text" class="form-control" placeholder="order currency" name="order_currency" required>
                </div>
                <div class="form-group">
                    <label>order payment_status</label>
                    <input type="text" class="form-control" placeholder="order payment_status" name="order_payment_status"
                        required>
                </div>
                <div class="form-group">
                    <label>order payment_method</label>
                    <input type="text" class="form-control" placeholder="order payment_method" name="order_payment_method"
                        required>
                </div>
                <div class="form-group">
                    <label>order notes</label>
                    <input type="text" class="form-control" placeholder="order notes" name="order_notes">
                </div>
                <div class="form-group">
                    <label>order shipped_at</label>
                    <input type="text" class="form-control" placeholder="order shipped_at" name="order_shipped_at">
                </div>
                <div class="form-group">
                    <label>order delivered_at</label>
                    <input type="text" class="form-control" placeholder="order delivered_at" name="order_delivered_at">
                </div>


            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>



@endsection