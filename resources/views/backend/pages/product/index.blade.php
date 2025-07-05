@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


                {{-- Table name --}}
                <div class="breadcrumb-title pe-3">Products</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Product Table</li>
                        </ol>
                    </nav>
                </div>



                {{-- Create new Product --}}
                <div class="ms-auto">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Create Product</a>
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
                                    <th>Name</th>
                                    <th>slug</th>
                                    <th>description</th>
                                    <th>short_description</th>
                                    <th>sku</th>
                                    <th>price</th>
                                    <th>sale price</th>
                                    <th>cost price</th>
                                    <th>stock quantity</th>
                                    <th>min quantity</th>
                                    <th>weight</th>
                                    <th>dimensions</th>

                                    <th>manage stock</th>
                                    <th>stock status</th>
                                    <th>image</th>

                                    <th>meta title</th>
                                    <th>meta description</th>
                                    <th>rating average</th>
                                    <th>rating count</th>

                                    <th>is_active</th>

                                    {{-- foreignId --}}
                                    <th>subcategory name</th>
                                    <th>category name</th>


                                    <th>is_featured</th>

                                    {{-- timestamps --}}
                                    <th>Create_at</th>
                                    <th>Update_at</th>

                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>



                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->slug }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->short_description }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>{{ $product->cost_price }}</td>
                                        <td>{{ $product->stock_quantity }}</td>
                                        <td>{{ $product->min_quantity }}</td>
                                        <td>{{ $product->weight }}</td>
                                        <td>{{ $product->dimensions }}</td>

                                        <td>
                                            @if ($product->manage_stock)
                                                <span class="badge bg-info">Managed</span>
                                            @else
                                                <span class="badge bg-secondary">Unmanaged</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($product->stock_status == 'in_stock')
                                                <span class="badge bg-success">In Stock</span>
                                            @else
                                                <span class="badge bg-danger">Out of Stock</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="product Image"
                                                    width="70" class="img-thumbnail">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>

                                        <td>{{ $product->meta_title }}</td>
                                        <td>{{ $product->meta_description }}</td>
                                        <td>{{ $product->rating_average }}</td>
                                        <td>{{ $product->rating_count }}</td>



                                        <td>
                                            @if ($product->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>

                                        {{-- foreignId --}}
                                        <td>{{ $product->subcategory->name ?? 'not found' }}</td>
                                        <td>{{ $product->category->name ?? 'not found' }}</td>


                                        <td>
                                            @if ($product->is_featured)
                                                <span class="badge bg-primary">Featured</span>
                                            @else
                                                <span class="badge bg-warning">Not Featured</span>
                                            @endif
                                        </td>
                                        {{-- timestamps --}}
                                        <td>{{ $product->created_at->format('Y-m-d H:i') ?? '-' }}</td>
                                        <td>{{ $product->updated_at->format('Y-m-d H:i') ?? '-' }}</td>





                                        {{-- edit button --}}
                                        <td>
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
                                        </td>





                                        {{-- delete button --}}
                                        <td>
                                            <form method="POST" action="{{ route('product.delete', $product->id) }}">
                                                @CSRF
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')"
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
