@extends('backend.auth.layouts.authmaster')

@section('main')


	
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card">
						<div class="row g-0">
							<div class="col-lg-5 border-end">
								<div class="card-body">
									<div class="p-5">
										<div class="text-start">
											<img src="{{asset('backend/assets/images/logo.png')}}" width="150" alt="">
										</div>
										<h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
										<p class="text-muted">We received your reset password request. Please enter your new password!</p>


										{{-- New Password --}}
										<div class="mb-3 mt-5">
											<label class="form-label">New Password</label>
											<input type="password" id="password" name="password" class="form-control" placeholder="Enter new password" required  autocomplete="new-password"/>
											<x-input-error :messages="$errors->get('password')" class="mt-2" />
										</div>


		

										{{-- Confirm Password --}}
										<div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm password" required autocomplete="new-password"/>
											 <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
										</div>



										

										{{-- Change Password --}}
										<div class="d-grid gap-2">

											{{-- Change Password --}}
											<button type="button" class="btn btn-primary" name="login">{{ __('Reset Password') }}</button>

											{{-- Back to Login --}}
											 <a href="{{route('login')}}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
										</div>



									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<img src="{{asset('backend/assets/images/login-images/forgot-password-frent-img.jpg')}}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	





	@endsection