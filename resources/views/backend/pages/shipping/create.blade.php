@extends('backend.layouts.backmaster')

@section('main')


    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{route('category.store')}}">
                            @CSRF
                            <div class="form-group card-body">
                                <div class="card">

                                     {{-- first_name --}}
                                    <div class="card-body">
                                        <label>First name</label>
                                        <input class="form-control" type="text" placeholder="first_name"
                                            name="shipping_address_first_name" 
                                            required>
                                    </div>


                                    {{-- last_name --}}
                                    <div class="card-body">
                                        <label>Last name</label>
                                        <input class="form-control" type="text" placeholder="last_name"
                                            name="shipping_address_last_name" 
                                            required>
                                    </div>


                                    {{-- company --}}
                                    <div class="card-body">
                                        <label>Company</label>
                                        <input class="form-control" type="text" placeholder="company name"
                                            name="shipping_address_company"  >
                                    </div>


                                    {{-- address_line_1 --}}
                                    <div class="card-body">
                                        <label>Address line_1</label>
                                        <input class="form-control" type="text" placeholder="123 Main Street"
                                            name="shipping_address_line_1" 
                                            >
                                    </div>


                                    {{-- address_line_2 --}}
                                    <div class="card-body">
                                        <label>Address line_2</label>
                                        <input class="form-control" type="text" placeholder="Apartment 4B"
                                            name="shipping_address_line_2" 
                                            >
                                    </div>



                                    {{-- city --}}
                                    <div class="card-body">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="city name"
                                            name="shipping_address_city" 
                                            >
                                    </div>



                                    {{-- state --}}
                                    <div class="card-body">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="NY"
                                            name="shipping_address_state" 
                                            >
                                    </div>




                                    {{-- postal_code --}}
                                    <div class="card-body">
                                        <label>Postal code</label>
                                        <input class="form-control" type="text" placeholder="10001"
                                            name="shipping_address_postal_code" 
                                            >
                                    </div>



                                    {{-- country --}}
                                    <div class="card-body">
                                        <label>Country</label>
                                        <input class="form-control" type="text" placeholder="country name"
                                            name="shipping_address_country" 
                                            required>
                                    </div>




                                    {{-- phone --}}
                                    <div class="card-body">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" placeholder="phone number"
                                            name="shipping_address_phone" 
                                            required>
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