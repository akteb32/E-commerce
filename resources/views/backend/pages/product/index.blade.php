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
					<a href="#" class="btn btn-primary">Create Product</a>
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
									<th>sale_price</th>
									<th>cost_price</th>
									<th>stock_quantity</th>
									<th>min_quantity</th>
									<th>weight</th>
									<th>dimensions</th>
									<th>is_active</th>
									<th>is_featured</th>
									<th>manage_stock</th>
									<th>stock_status</th>
									<th>image</th>
									<th>gallery</th>
									<th>meta_title</th>
									<th>meta_description</th>
									<th>rating_average</th>
									<th>rating_count</th>
									
									{{-- foreignId --}}
									<th>category_id</th>
									<th>subcategory_id</th>

									
									{{-- timestamps --}}
									<th>Create_at</th>
									<th>Update_at</th>

									<th colspan="2">Action</th>
								</tr>
							</thead>



							<tbody>
								@foreach($products as $product)
								<tr>
									<td>{{$product->id}}</td>
									<td>{{$product->name}}</td>
									<td>{{$product->slug}}</td>
									<td>{{$product->description}}</td>
									<td>{{$product->short_description}}</td>
									<td>{{$product->sku}}</td>
									<td>{{$product->price}}</td>
									<td>{{$product->sale_price}}</td>
									<td>{{$product->cost_price}}</td>
									<td>{{$product->stock_quantity}}</td>
									<td>{{$product->min_quantity}}</td>
									<td>{{$product->weight}}</td>
									<td>{{$product->dimensions}}</td>
									<td>{{$product->is_active}}</td>
									<td>{{$product->is_featured}}</td>
									<td>{{$product->manage_stock}}</td>
									<td>{{$product->stock_status}}</td>							
									<td>{{$product->image}}</td>
									<td>{{$product->gallery}}</td>
									<td>{{$product->meta_title}}</td>
									<td>{{$product->meta_description}}</td>
									<td>{{$product->rating_average}}</td>
									<td>{{$product->rating_count}}</td>

									{{-- foreignId --}}
									<td>{{$product->category_id}}</td>
									<td>{{$product->subcategory_id}}</td>

									{{-- timestamps --}}
									<td>{{$product->created_at}}</td>
									<td>{{$product->updated_at}}</td>




									
									{{-- edit button --}}
									<td>
										<a href="/product-edit/{{$product->id}}" class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
									</td>


									


									{{-- delete button --}}
									<td>
        							<form method="POST" action="/product-delete/{{$product->id}}">
         							 @CSRF
          							 @method('DELETE')
         							 <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill shadow-sm px-3">Delete</button>
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