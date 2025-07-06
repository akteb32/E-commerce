@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


                {{-- Table name --}}
                <div class="breadcrumb-title pe-3">Shipping Addresses</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shipping Table</li>
                        </ol>
                    </nav>
                </div>



                {{-- Create new Shipping Address --}}
                <div class="ms-auto">
                    <a href="{{ route('shipping.create') }}" class="btn btn-primary">Create Shipping Address</a>
                    {{-- <button type="button" class="btn btn-primary split-bg-primary text-primary"><a href="#">Create
							Category</a></button> --}}
                </div>

            </div>
            <hr />
            <!--end breadcrumb-->





            {{-- DataTable --}}
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">



                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>first_name</th>
                                    <th>last_name</th>
                                    <th>company</th>
                                    <th>address_line_1</th>
                                    <th>address_line_2</th>
                                    <th>city</th>
                                    <th>state</th>
                                    <th>postal_code</th>
                                    <th>country</th>
                                    <th>phone number</th>

                                    {{-- foreignId --}}
                                    <th>order number</th>

                                    {{-- timestamps --}}
                                    <th>Create_at</th>
                                    <th>Update_at</th>

                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>



                            <tbody>
                                @foreach ($shipping_addresses as $shipping)
                                    <tr>
                                        <td>{{ $shipping->Id }}</td>
                                        <td>{{ $shipping->first_name }}</td>
                                        <td>{{ $shipping->last_name }}</td>
                                        <td>{{ $shipping->company }}</td>
                                        <td>{{ $shipping->address_line_1 }}</td>
                                        <td>{{ $shipping->address_line_2 }}</td>
                                        <td>{{ $shipping->city }}</td>
                                        <td>{{ $shipping->state }}</td>
                                        <td>{{ $shipping->postal_code }}</td>
                                        <td>{{ $shipping->country }}</td>
                                        <td>{{ $shipping->phone }}</td>

                                        {{-- foreignId --}}
                                        <td>{{ $shipping->order->order_number ?? 'not found' }}</td>

                                        {{-- timestamps --}}
                                        <td>{{ $shipping->created_at }}</td>
                                        <td>{{ $shipping->updated_at }}</td>





                                        {{-- edit button --}}
                                        <td>
                                            <a href="{{ route('shipping.edit', $shipping->id) }}"
                                                class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
                                        </td>




                                        {{-- delete button --}}
                                        <td>
                                            <form method="POST" action="{{ route('shipping.delete', $shipping->id) }}">
                                                @CSRF
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this product?')"
                                                    class="btn btn-sm btn-outline-danger rounded-pill shadow-sm px-3">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>




                        </table>
                    </div>
                </div>
            </div>
            <hr />
            {{-- DataTable --}}




        </div>
    </div>
    <!--end page wrapper -->
@endsection
