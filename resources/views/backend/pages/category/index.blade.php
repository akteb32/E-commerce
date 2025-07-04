@extends('backend.layouts.backmaster')

@section('main')


	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


				{{-- Table name --}}
				<div class="breadcrumb-title pe-3">Categories</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Category Table</li>
						</ol>
					</nav>
				</div>



				{{-- Create new category --}}
				<div class="ms-auto">
					<a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a>
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


									{{-- timestamps --}}
									<th>Create_at</th>
									<th>Update_at</th>

									<th colspan="2">Action</th>
								</tr>
							</thead>



							<tbody>
								@foreach($categories as $category)
								<tr>
									<td>{{$category->id}}</td>
									<td>{{$category->name}}</td>
									<td>{{$category->slug}}</td>
									<td>{{$category->description}}</td>
									<td>{{$category->image}}</td>
									<td>{{$category->is_active}}</td>
									<td>{{$category->sort_order}}</td>
									<td>{{$category->meta_title}}</td>
									<td>{{$category->meta_description}}</td>

									
									{{-- timestamps --}}
									<td>{{$category->created_at}}</td>
									<td>{{$category->updated_at}}</td>




									
									{{-- edit button --}}
									<td>
										<a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
									</td>

									

									{{-- delete button --}}
									<td>
        							<form method="POST" action="/category-delete/{{$category->id}}">
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