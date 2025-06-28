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
                                        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab"
                                            aria-controls="address" aria-selected="true"><i
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
                                        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab"
                                            aria-controls="address" aria-selected="true"><i
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
                                                    <form method="post" action="">
                                                        @scrf
                                                    <address>
                                                       <input type="text" placeholder="3522 Interstate"/> <br />
                                                       <input type="text" placeholder="75 Business Spur,"/>  <br />
                                                        <input type="text" placeholder="Sault Ste."/> <br />
                                                       <input type="text" placeholder=" Marie, MI 49783"/>
                                                    </address>
                                                    <p><input type="text" placeholder="New York"/></p>
                                                    <button type="submit">submit</button>
                                                    {{-- <a href="{{route('login')}}" class="btn-small">Edit</a> --}}
                                                    </form>
                                                </div>
                                            </div>
                                        </div>




                                        {{-- Shipping Address --}}
                                        <div class="col-lg-6">
                                            <div class="card">
                                                
                                                <div class="card-header">
                                                    <h5 class="mb-0">Shipping Address</h5>
                                                </div>
                                                
                                                <div class="card-body">
                                                    <form method="post" action="">
                                                        @scrf
                                                    <address>
                                                        <input type="text" placeholder="4299 Express Lane"/> <br />
                                                      <input type="text" placeholder="Sarasota,"/>   <br /><input type="text" placeholder="FL 34249 USA"/> <br /> <input type="text" placeholder="Phone: 1.941.227.4444"/>
                                                    </address>
                                                    <p><input type="text" placeholder="Sarasota"/></p>
                                                    <button type="submit">submit</button>
                                                    <a href="{{route('login')}}" class="btn-small">Edit</a>
                                                </div>
                                                    </form>
                                            </div>
                                        </div>













                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br />
                                                        75 Business Spur,<br />
                                                        Sault Ste. <br />Marie, MI 49783
                                                    </address>
                                                    <p>New York</p>
                                                    <a href="{{route('login')}}" class="btn-small">Edit</a>
                                                </div>
                                            </div>
                                        </div>




                                        {{-- Shipping Address --}}
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Shipping Address</h5>
                                                </div>
                                                <div class="card-body">
                                                    <address>
                                                        4299 Express Lane<br />
                                                        Sarasota, <br />FL 34249 USA <br />Phone: 1.941.227.4444
                                                    </address>
                                                    <p>Sarasota</p>
                                                    <a href="{{route('login')}}" class="btn-small">Edit</a>
                                                </div>
                                            </div>
                                        </div>













                                        
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