@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{ route('coupon.store') }}">
                            @CSRF
                            <div class="form-group card-body">
                                <div class="card">



                                    {{-- code --}}
                                    <div class="card-body">
                                        <label>coupon code</label>
                                        <input class="form-control" type="text" placeholder="coupon code"
                                            name="coupon_code" required>
                                    </div>



                                    {{-- type --}}
                                    <div class="card-body">
                                        <label for="coupon_type">Coupon Type</label>
                                        <select class="form-control" name="coupon_type" id="coupon_type" required>
                                            <option value="fixed">fixed</option>
                                            <option value="percentage">percentage</option>
                                        </select>
                                    </div>


                                    {{-- value --}}
                                    <div class="card-body">
                                        <label>coupon value</label>
                                        <input class="form-control" type="number" placeholder="coupon value"
                                            name="coupon_value">
                                    </div>



                                    {{-- minimum_amount --}}
                                    <div class="card-body">
                                        <label>coupon minimum_amount</label>
                                        <input class="form-control" type="number" placeholder="coupon minimum_amount"
                                            name="coupon_minimum_amount">
                                    </div>


                                    {{-- usage_limit --}}
                                    <div class="card-body">
                                        <label>coupon usage_limit</label>
                                        <input class="form-control" type="number" placeholder="coupon usage_limit"
                                            name="coupon_usage_limit">
                                    </div>


                                    {{-- used_count --}}
                                    <div class="card-body">
                                        <label>coupon used_count</label>
                                        <input class="form-control" type="number" placeholder="coupon used_count"
                                            name="coupon_used_count">
                                    </div>





                                    {{-- activation --}}
                                    <div class="card-body">
                                        <label>coupon activation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="coupon_is_active"
                                                id="is_active_1" value="1">
                                            <label class="form-check-label" for="is_active_1">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="coupon_is_active"
                                                id="is_active_0" value="0">
                                            <label class="form-check-label" for="is_active_0">Inactive</label>
                                        </div>
                                    </div>






                                    {{-- starts_at --}}
                                    <div class="card-body">
                                        <label>starts_at</label>
                                        <input type="datetime-local" class="form-control" name="coupon_starts_at">
                                    </div>


                                    {{-- expires_at --}}
                                    <div class="card-body">
                                        <label>expires_at</label>
                                        <input type="datetime-local" class="form-control" name="coupon_expires_at">
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
