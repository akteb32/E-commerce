@extends('backend.layouts.backmaster')

@section('main')


	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


				{{-- Table name --}}
				<div class="breadcrumb-title pe-3">Subcategories</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Subcategory Table</li>
						</ol>
					</nav>
				</div>



				{{-- Create new subcategory --}}
				<div class="ms-auto">
					<a href="{{route('subcategory.create')}}" class="btn btn-primary">Create Subcategory</a>
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
									<th>image</th>
									<th>is_active</th>
									<th>sort_order</th>
									<th>meta_title</th>
									<th>meta_description</th>

									{{-- foreignId --}}
									<th>category name</th>

									{{-- timestamps --}}
									<th>Create_at</th>
									<th>Update_at</th>

									<th colspan="2">Action</th>
								</tr>
							</thead>



							<tbody>
								@foreach($subcategories as $subcategory)
									<tr>
										<td>{{$subcategory->id}}</td>
										<td>{{$subcategory->name}}</td>
										<td>{{$subcategory->slug}}</td>
										<td>{{$subcategory->description}}</td>
										<td>
											@if($subcategory->image)
												<img src="{{ asset('storage/' . $subcategory->image) }}" alt="Subcategory Image"
													width="70" class="img-thumbnail">
											@else
												<span class="text-muted">No Image</span>
											@endif
										</td>
										<td>
											@if($subcategory->is_active)
												<span class="badge bg-success">Active</span>
											@else
												<span class="badge bg-secondary">Inactive</span>
											@endif
										</td>
										<td>{{$subcategory->sort_order}}</td>
										<td>{{$subcategory->meta_title}}</td>
										<td>{{$subcategory->meta_description}}</td>

										{{-- foreignId --}}
										<td>{{$subcategory->category->name ?? 'not found'}}</td>

										{{-- timestamps --}}
										<td>{{ $subcategory->created_at->format('Y-m-d H:i')?? '-' }}</td>
										<td>{{ $subcategory->updated_at->format('Y-m-d H:i')?? '-' }}</td>





										{{-- edit button --}}
										<td>
											<a href="{{ route('subcategory.edit', $subcategory->id) }}"
												class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
										</td>




										{{-- delete button --}}
										<td>
											<form method="POST" action="{{ route('subcategory.delete', $subcategory->id) }}">
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