@extends('layout.frontend.frontmaster')

@section('frontend_main')



<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Add New Address</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('') }}" method="POST">
                            @csrf
                            
                            <div class="form-group mb-3">
                                <label for="address_line">Address</label>
                                <input type="text" name="address_line" id="address_line" class="form-control" placeholder="Enter your address" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" placeholder="Enter your city" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder="Enter your state" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="zip">ZIP Code</label>
                                <input type="text" name="zip" id="zip" class="form-control" placeholder="Enter ZIP code" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Address</button>
                            <a href="{{ route('') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    




@endsection