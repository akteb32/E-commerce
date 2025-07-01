@extends('backend.layouts.backmaster')

@section('main')


	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


				{{-- Table name --}}
				<div class="breadcrumb-title pe-3">Orders</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Order Table</li>
						</ol>
					</nav>
				</div>



				{{-- Create new category --}}
				<div class="ms-auto">
					<a href="#" class="btn btn-primary">Create Order</a>
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
									<th>order_number</th>
									<th>status</th>
									<th>total_amount</th>
									<th>tax_amount</th>
									<th>shipping_amount</th>
									<th>discount_amount</th>
									<th>currency</th>
									<th>payment_status</th>
									<th>payment_method</th>
									<th>notes</th>
									<th>user_id</th>
									<th>shipped_at</th>
									<th>delivered_at</th>


									<th>Create_at</th>
									<th>Update_at</th>

									<th colspan="2">Action</th>
								</tr>
							</thead>



							<tbody>
								@foreach($orders as $order)
									<tr>
										<td>{{$order->id}}</td>
										<td>{{$order->order_number}}</td>
										<td>{{$order->status}}</td>
										<td>{{$order->total_amount}}</td>
										<td>{{$order->tax_amount}}</td>
										<td>{{$order->shipping_amount}}</td>
										<td>{{$order->discount_amount}}</td>
										<td>{{$order->currency}}</td>
										<td>{{$order->payment_status}}</td>
										<td>{{$order->payment_method}}</td>
										<td>{{$order->notes}}</td>
										<td>{{$order->user_id}}</td>
										<td>{{$order->shipped_at}}</td>
										<td>{{$order->delivered_at}}</td>


										<td>{{$order->created_at}}</td>
										<td>{{$order->updated_at}}</td>

										{{-- edit button --}}
										<td>
											<a href="/order-edit/{{$order->id}}"
												class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
										</td>

										{{-- delete button --}}
										<td>
											<form method="POST" action="/order-delete/{{$order->id}}">
												@CSRF
												@method('DELETE')
												<button type="submit"
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