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
					<a href="#" class="btn btn-primary">Create Shipping Address</a>
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
									<th>phone</th>
									<th>order_id</th>
									<th>Create_at</th>
									<th>Update_at</th>
									<th colspan="2">Action</th>
								</tr>
							</thead>



							<tbody>
								@foreach($shipping_addresses as $shipping_address)
								<tr>
									<td>{{$shipping_address->Id}}</td>
									<td>{{$shipping_address->first_name}}</td>
									<td>{{$shipping_address->last_name}}</td>
									<td>{{$shipping_address->company}}</td>
									<td>{{$shipping_address->address_line_1}}</td>
									<td>{{$shipping_address->address_line_2}}</td>
									<td>{{$shipping_address->city}}</td>
									<td>{{$shipping_address->state}}</td>
									<td>{{$shipping_address->postal_code}}</td>
									<td>{{$shipping_address->country}}</td>
									<td>{{$shipping_address->phone}}</td>
									<td>{{$shipping_address->order_id}}</td>
								
									<td>{{$shipping_address->created_at}}</td>
									<td>{{$shipping_address->updated_at}}</td>


									{{-- edit button --}}
									<td>
										<a href="/shipping_address-edit/{{$shipping_address->id}}" class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
									</td>


									{{-- delete button --}}
									<td>
        							<form method="POST" action="/shipping_address-delete/{{$shipping_address->id}}">
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