@extends('backend.layouts.backmaster')

@section('main')


    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{route('coupon.store')}}">
                            @CSRF
                            <div class="form-group card-body">
                                <div class="card">



                                    {{-- code --}}
                                    <div class="card-body">
                                        <label>coupon code</label>
                                        <input class="form-control" type="text" placeholder="coupon code" name="coupon_code"
                                            required>
                                    </div>



                                    {{-- type --}}
                                    <div class="card-body">
                                        <label>coupon type</label>
                                        <input class="form-control" type="text" placeholder="coupon type" name="coupon_type"
                                            required>
                                    </div>


                                    {{-- value --}}
                                    <div class="card-body">
                                        <label>coupon value</label>
                                        <input class="form-control" type="number" placeholder="coupon value"
                                            name="coupon_value" required>
                                    </div>



                                    {{-- minimum_amount --}}
                                    <div class="card-body">
                                        <label>coupon minimum_amount</label>
                                        <input class="form-control" type="number" placeholder="coupon minimum_amount"
                                            name="coupon_minimum_amount" required>
                                    </div>


                                    {{-- usage_limit --}}
                                    <div class="card-body">
                                        <label>coupon usage_limit</label>
                                        <input class="form-control" type="number" placeholder="coupon usage_limit"
                                            name="coupon_usage_limit" required>
                                    </div>


                                    {{-- used_count --}}
                                    <div class="card-body">
                                        <label>coupon used_count</label>
                                        <input class="form-control" type="number" placeholder="coupon used_count"
                                            name="coupon_used_count" required>
                                    </div>





                                    {{-- activation --}}
                                    <div class="card-body">
                                        <p>coupon activation</p>
                                        <div class="form-check form-check-inline">
                                            <label>Active</label>
                                            <input type="radio" class="form-check-input" id="active" value="1"
                                                name="coupon_is_active">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label>inActive</label>
                                            <input type="radio" class="form-check-input" id="inactive" value="0"
                                                name="coupon_is_active">
                                        </div>
                                    </div>




                                    {{-- starts_at --}}
                                    <div class="card-body">
                                        <label>coupon starts_at</label>
                                        <input type="datetime" class="form-control" placeholder="starts_at"
                                            name="coupon_starts_at">
                                    </div>


                                    {{-- expires_at --}}
                                    <div class="card-body">
                                        <label>coupon expires_at</label>
                                        <input type="datetime" class="form-control" placeholder="expires_at"
                                            name="coupon_expires_at">
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