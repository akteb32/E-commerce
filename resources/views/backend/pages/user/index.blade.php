@extends('backend.layouts.backmaster')

@section('main')


	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


				{{-- Table name --}}
				<div class="breadcrumb-title pe-3">Users</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Users Table</li>
						</ol>
					</nav>
				</div>



				{{-- Create new user --}}
				<div class="ms-auto">
					<a href="#" class="btn btn-primary">Create User</a>
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
									<th>name</th>
									<th>phone</th>
									<th>address</th>
									<th>city</th>
									<th>postal_code</th>
									<th>country</th>
									<th>avatar</th>
									<th>password</th>
									<th>email</th>
									<th>email_verified_at</th>
									<th>is_active</th>

									{{-- timestamps --}}
									<th>Create_at</th>
									<th>Update_at</th>

									<th colspan="3">Action</th>
								</tr>
							</thead>



							<tbody>
								@foreach($users as $user)
									<tr>
										<td>{{$user->id}}</td>
										<td>{{$user->name}}</td>
										<td>{{$user->phone}}</td>
										<td>{{$user->address}}</td>
										<td>{{$user->city}}</td>
										<td>{{$user->postal_code}}</td>
										<td>{{$user->country}}</td>
										<td>{{$user->avatar}}</td>
										<td>{{$user->password}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->email_verified_at}}</td>
										<td>{{$user->is_active}}</td>

										{{-- timestamps --}}
										<td>{{$user->created_at}}</td>
										<td>{{$user->updated_at}}</td>



										

										{{-- Add Role --}}
										<td>
											<a href="/user-role/{{ $user->id }}"
												class="btn btn-sm btn-outline-primary rounded-pill shadow-sm px-3">Add Role</a>
										</td>




										{{-- edit button --}}
										<td>
											<a href="/user-edit/{{$user->id}}"
												class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
										</td>




										{{-- delete button --}}
										<td>
											<form method="POST" action="/user-delete/{{$user->id}}">
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