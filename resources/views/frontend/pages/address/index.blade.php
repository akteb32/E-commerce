@extends('frontend.layouts.frontmaster')

@section('main')
    {{-- address --}}
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">

                                    {{-- My Address --}}
                                    <li class="nav-item">
                                        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address"
                                            role="tab" aria-controls="address" aria-selected="true"><i
                                                class="fi-rs-marker mr-10"></i>My Address</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="tab-content account dashboard-content pl-50">
                                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                    <div class="row">




                                        {{-- Billing Address --}}
                                        <div class="col-lg-6">
                                            <div class="card mb-3 mb-lg-0">
                                                <div class="card-header">
                                                    <h3 class="mb-0">Billing Address</h3>
                                                </div>
                                                <div class="card-body">
                                                    <address>
                                                        3522 Interstate<br />
                                                        75 Business Spur,<br />
                                                        Sault Ste. <br />Marie, MI 49783
                                                    </address>
                                                    <p>New York</p>
                                                    <a href="{{ route('login') }}" class="btn-small">Edit</a>
                                                </div>
                                            </div>
                                        </div>




                                        
                                        {{-- Shipping Address --}}
                                        <address>
                                            {{ $shippingAddress->address ?? 'No shipping address found' }}
                                            <br />
                                            Phone: {{ $shippingAddress->phone ?? '' }}
                                            <br />
                                            first_name: {{ $shippingAddress->first_name ?? '' }}
                                            <br />
                                            last_name: {{ $shippingAddress->last_name ?? '' }}
                                            <br />
                                            company: {{ $shippingAddress->company ?? '' }}
                                            <br />
                                            address_line_1: {{ $shippingAddress->address_line_1 ?? '' }}
                                            <br />
                                            address_line_2: {{ $shippingAddress->address_line_2 ?? '' }}
                                            <br />
                                            city: {{ $shippingAddress->city ?? '' }}
                                            <br />
                                            state: {{ $shippingAddress->state ?? '' }}
                                            <br />
                                            postal_code: {{ $shippingAddress->postal_code ?? '' }}
                                            <br />
                                            country: {{ $shippingAddress->country ?? '' }}
                                            <br />
                                            order_id: {{ $shippingAddress->order_id}}
                                            <br />

                                        </address>
                                        
                                        <a href="#" class="btn-small">Edit</a>














                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
