@extends('backend.layouts.backmaster')

@section('main')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{route('shipping_addresse.update', $shipping_address->id)}}">
                            @CSRF
                            @method('PUT')
                            <div class="form-group card-body">
                                <div class="card">



                                    {{-- first_name --}}
                                    <div class="card-body">
                                        <label>First name</label>
                                        <input class="form-control" type="text" placeholder="first_name"
                                            name="shipping_address_first_name" value="{{$shipping_address->first_name}}"
                                            required>
                                    </div>


                                    {{-- last_name --}}
                                    <div class="card-body">
                                        <label>Last name</label>
                                        <input class="form-control" type="text" placeholder="last_name"
                                            name="shipping_address_last_name" value="{{$shipping_address->last_name}}"
                                            required>
                                    </div>


                                    {{-- company --}}
                                    <div class="card-body">
                                        <label>Company</label>
                                        <input class="form-control" type="text" placeholder="company name"
                                            name="shipping_address_company" value="{{$shipping_address->company}}">
                                    </div>


                                    {{-- address_line_1 --}}
                                    <div class="card-body">
                                        <label>Address line_1</label>
                                        <input class="form-control" type="text" placeholder="123 Main Street"
                                            name="shipping_address_line_1" value="{{$shipping_address->address_line_1}}">
                                    </div>


                                    {{-- address_line_2 --}}
                                    <div class="card-body">
                                        <label>Address line_2</label>
                                        <input class="form-control" type="text" placeholder="Apartment 4B"
                                            name="shipping_address_line_2" value="{{$shipping_address->address_line_2}}">
                                    </div>



                                    {{-- city --}}
                                    <div class="card-body">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="city name"
                                            name="shipping_address_city" value="{{$shipping_address->city}}">
                                    </div>



                                    {{-- state --}}
                                    <div class="card-body">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="NY"
                                            name="shipping_address_state" value="{{$shipping_address->state}}">
                                    </div>




                                    {{-- postal_code --}}
                                    <div class="card-body">
                                        <label>Postal code</label>
                                        <input class="form-control" type="text" placeholder="10001"
                                            name="shipping_address_postal_code" value="{{$shipping_address->postal_code}}">
                                    </div>



                                    {{-- country --}}
                                    <div class="card-body">
                                        <label>Country</label>
                                        <input class="form-control" type="text" placeholder="country name"
                                            name="shipping_address_country" value="{{$shipping_address->country}}" required>
                                    </div>




                                    {{-- phone --}}
                                    <div class="card-body">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" placeholder="phone number"
                                            name="shipping_address_phone" value="{{$shipping_address->phone}}" required>
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