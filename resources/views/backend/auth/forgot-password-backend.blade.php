@extends('backend.auth.layouts.authmaster')

@section('main')


	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box">
				<div class="card-body">
					<div class="p-4 rounded  border">
						<div class="text-center">
							<img src="{{asset('backend/assets/images/icons/forgot-2.png')}}" width="120" alt="" />
						</div>
						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
						<p class="text-muted">Enter your registered email ID to reset the password</p>


						<form method="POST" action="{{ route('password.email') }}">
    				    @csrf



       					 <!-- Email Address -->
						<div class="my-4">
							<label class="form-label">Email Address</label>
							<input type="email" id="email" class="form-control form-control-lg"  name="email" placeholder="Enter your email address" required autofocus />
							<x-input-error :messages="$errors->get('email')" class="mt-2" />
						</div>


						{{-- button and link --}}
						<div class="d-grid gap-2">

							{{-- button --}}
							<button type="button" class="btn btn-primary btn-lg"> {{ __('Email Password Reset Link') }}</button> 
							
							{{-- Link - Back to Login  --}}
							<a href="{{route('login')}}" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
						</div>
 					</form>


					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->








	@endsection	
