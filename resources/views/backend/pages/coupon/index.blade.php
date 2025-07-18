@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


                {{-- Table name --}}
                <div class="breadcrumb-title pe-3">Coupons</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Coupon Table</li>
                        </ol>
                    </nav>
                </div>



                {{-- Create new Coupon --}}
                <div class="ms-auto">
                    <a href="{{ route('coupon.create') }}" class="btn btn-primary">Create Coupon</a>
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
                                    <th>code</th>
                                    <th>type</th>
                                    <th>value</th>
                                    <th>minimum_amount</th>
                                    <th>usage_limit</th>
                                    <th>used_count</th>

                                    <th>is_active</th>

                                    <th>starts_at</th>
                                    <th>expires_at</th>

                                    {{-- timestamps --}}
                                    <th>Create_at</th>
                                    <th>Update_at</th>

                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>



                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr>
                                        <td>{{ $coupon->id }}</td>
                                        <td>{{ $coupon->code }}</td>


                                        <td>
                                            @switch($coupon->type)
                                                @case('fixed')
                                                    <span class="badge bg-info">fixed</span>
                                                @break

                                                @case('percentage')
                                                    <span class="badge bg-secondary">percentage</span>
                                                @break

                                                @default
                                                    <span class="badge bg-warning">Unknown</span>
                                            @endswitch
                                        </td>


                                        <td>{{ $coupon->value }}</td>

                                        <td>{{ $coupon->minimum_amount }}</td>
                                        <td>{{ $coupon->usage_limit }}</td>
                                        <td>{{ $coupon->used_count }}</td>


                                        <td>
                                            @if ($coupon->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>


                                        <td>{{ $coupon->starts_at ? $coupon->starts_at->format('Y-m-d') : '-' }}</td>
                                        <td>{{ $coupon->expires_at ? $coupon->expires_at->format('Y-m-d') : '-' }}</td>

                                        {{-- timestamps --}}
                                        <td>{{ $coupon->created_at }}</td>
                                        <td>{{ $coupon->updated_at }}</td>




                                        {{-- edit button --}}
                                        <td>
                                            <a href="{{ route('coupon.edit', $coupon->id) }}"
                                                class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
                                        </td>




                                        {{-- delete button --}}
                                        <td>
                                            <form method="POST" action="{{ route('coupon.delete', $coupon->id) }}">
                                                @CSRF
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this coupon?')"
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
