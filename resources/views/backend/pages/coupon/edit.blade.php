@extends('layout.backend.backmaster')

@section('backend_main')






    <form method="POST" action="{{route('coupon.update', $coupon->id)}}">
        @CSRF
        @method('PUT')
        <div class="form-group">
            <label>Coupon name</label>
            <input type="text" class="form-control" placeholder="Coupon name" name="coupon_name" value="{{$coupon->name}}"
                required>
        </div>
        <div class="form-group">
            <label>coupon code</label>
            <input type="text" class="form-control" placeholder="coupon code" name="coupon_code" value="{{$coupon->code}}"
                required>
        </div>
        <div class="form-group">
            <label>coupon type</label>
            <input type="text" class="form-control" placeholder="Enter coupon type" name="coupon_type"
                value="{{$coupon->type}}" required>
        </div>
        <div class="form-group">
            <label>coupon value</label>
            <input type="text" class="form-control" placeholder="Enter coupon value" name="coupon_value"
                value="{{$coupon->value}}" required>
        </div>
        <div class="form-group">
            <label>coupon minimum_amount</label>
            <input type="text" class="form-control" placeholder="Enter minimum_amount" name="coupon_minimum_amount"
                value="{{$coupon->minimum_amount}}" required>
        </div>
        <div class="form-group">
            <label>coupon usage_limit</label>
            <input type="text" class="form-control" placeholder="Enter usage_limit" name="coupon_usage_limit"
                value="{{$coupon->usage_limit}}" required>
        </div>
        <div class="form-group">
            <label>coupon used_count</label>
            <input type="text" class="form-control" placeholder="Enter used_count" name="coupon_used_count"
                value="{{$coupon->used_count}}" required>
        </div>


        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>





@endsection