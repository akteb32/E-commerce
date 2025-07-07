@extends('backend.auth.layouts.authmaster')

@section('main')


	<body class="bg-login">
		<!--wrapper-->
		<div class="wrapper">
			<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
				<div class="container">
					<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
						<div class="col mx-auto">
							<div class="my-4 text-center">
								<img src="{{asset('backend/assets/images/logo-img.png')}}" width="180" alt="" />
							</div>
							<div class="card">
								<div class="card-body">
									<div class="border p-4 rounded">
										<div class="text-center">
											<h3 class="">Register</h3>
											<p>Already have an account? <a href="{{ route('login.admin') }}">login here</a>
											</p>
										</div>
										<div class="d-grid">
											<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
													class="d-flex justify-content-center align-items-center">
													<img class="me-2"
														src="{{asset('backend/assets/images/icons/search.svg')}}" width="16"
														alt="Image Description">
													<span>Sign Up with Google</span>
												</span>
											</a> <a href="javascript:;" class="btn btn-facebook"><i
													class="bx bxl-facebook"></i>Sign Up with Facebook</a>
										</div>
										<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
											<hr />
										</div>







										{{-- form --}}
										<div class="form-body">
											<form method="POST" action="{{ route('admin.register.store') }}" class="row g-3">
												@csrf

												<!-- Name -->
												<div class="col-12">
													<label for="inputFirstName" class="form-label">Name</label>

													<input type="text" class="form-control" id="name" placeholder="Username"
														name="name" required autofocus autocomplete="name">
													<x-input-error :messages="$errors->get('name')" class="mt-2" />
												</div>


												<!-- Email Address -->
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">Email Address</label>
													<input type="email" class="form-control" id="email" placeholder="Email"
														required autofocus autocomplete="username" />
													<x-input-error :messages="$errors->get('email')" class="mt-2" />
												</div>


												<!-- Phone Number -->
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">Phone Number</label>
													<input type="text" class="form-control" name="phone" id="phone"
														placeholder="your phone number" autofocus autocomplete="phone" />
													<x-input-error :messages="$errors->get('phone')" class="mt-2" />
												</div>


												<!-- Address -->
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">Address</label>
													<input type="text" class="form-control" name="address" id="address"
														placeholder="address" autofocus autocomplete="address" />
													<x-input-error :messages="$errors->get('address')" class="mt-2" />
												</div>


												<!-- City -->
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">City</label>
													<input type="text" class="form-control" name="city" id="city"
														placeholder="city" autofocus autocomplete="city" />
													<x-input-error :messages="$errors->get('city')" class="mt-2" />
												</div>


												<!-- Postal_Code -->
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">Postal_Code</label>
													<input type="text" class="form-control" name="postal_code"
														id="postal_code" placeholder="postal_code" autofocus
														autocomplete="postal_code" />
													<x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
												</div>


												<!-- Password -->
												<div class="col-12">
													<label for="inputChoosePassword" class="form-label">Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" class="form-control border-end-0"
															id="password" placeholder="Enter Password" name="password"
															required autofocus autocomplete="new-password" /> <x-input-error
															:messages="$errors->get('password')" class="mt-2" /> <a
															href="javascript:;" class="input-group-text bg-transparent"><i
																class='bx bx-hide'></i></a>
													</div>
												</div>


												<!-- Confirm Password -->
												<div class="col-12">
													<label for="inputChoosePassword" class="form-label">Confirm
														Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" class="form-control border-end-0"
															id="password_confirmation" placeholder="Enter Confirm password"
															name="password_confirmation" required autofocus
															autocomplete="new-password" />
														<x-input-error :messages="$errors->get('password_confirmation')"
															class="mt-2" />
														<a href="javascript:;" class="input-group-text bg-transparent"><i
																class='bx bx-hide'></i></a>
													</div>
												</div>


												{{-- Country --}}
												<div class="col-12">
													<label for="inputSelectCountry" class="form-label">Country</label>
													<select class="form-select" id="country" name="country"
														aria-label="Default select example" autofocus
														autocomplete="country">
														<option selected>jordan</option>
														<option value="1">United Kingdom</option>
														<option value="2">America</option>
														<option value="3">Dubai</option>
														<option value="4">Egypt</option>
														<option value="5">UAE</option>
													</select>
													<x-input-error :messages="$errors->get('country')" class="mt-2" />
												</div>


												<!-- Avatar -->
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">Avatar</label>
													<input type="file" class="form-control" name="avatar" id="avatar"
														placeholder="your avatar" autofocus autocomplete="avatar" />
													<x-input-error :messages="$errors->get('avatar')" class="mt-2" />
												</div>


												{{-- I read and agree to Terms & Conditions --}}
												<div class="col-12">
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox"
															id="flexSwitchCheckChecked">
														<label class="form-check-label" for="flexSwitchCheckChecked">I read
															and agree to Terms & Conditions</label>
													</div>
												</div>


												{{-- button --}}
												<div class="col-12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary" name="login"><i
																class='bx bx-user'></i>{{ __('Register') }}</button>
													</div>
												</div>
											</form>
										</div>




									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
		</div>







@endsection