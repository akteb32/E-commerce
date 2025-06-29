@extends('backend.auth.layouts.authmaster')

@section('main')







		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mt-5 mt-lg-0">
							<div class="card-body">
								<div class="border p-4 rounded">


									{{-- Don't have an account yet? --}}
									<div class="text-center">
										<h3 class="">login</h3>
										<p>Don't have an account yet? <a href="authentication-signup-with-header-footer.html">register here</a>
										</p>
									</div>

									{{-- Sign in with Google --}}
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                      				    <img class="me-2" src="{{asset('backend/assets/images/icons/search.svg')}}" width="16" alt="Image Description">
                        				  <span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>



									{{-- SIGN IN WITH EMAIL --}}
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr/>
									</div>




									<div class="form-body">
										{{-- form  --}}
											<form method="POST" action="{{ route('login') }}" class="row g-3">
                                  		      @csrf
					
												
												{{-- Email Address --}}
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">Email Address</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="Username or Email *" required autofocus autocomplete="username" >
													<x-input-error :messages="$errors->get('email')" class="mt-2" />
												</div>


												
												{{-- Password --}}
												<div class="col-12">
													<label for="inputChoosePassword" class="form-label">Enter
														Password</label>
													<div class="input-group" id="show_hide_password">

														<input type="password" class="form-control border-end-0"
															id="password" name="password" required autocomplete="current-password" placeholder="Enter your password *"
															value="12345678"
															> <a href="javascript:;"
															class="input-group-text bg-transparent"><i
																class='bx bx-hide'></i></a>
																<x-input-error :messages="$errors->get('password')" class="mt-2" />

													</div>
												</div>
												
                                            
 
												




												{{-- Remember Me --}}
												<div class="col-md-6">
													<div class="form-check form-switch">

														<input class="form-check-input" type="checkbox" name="remember"
															id="remember_me"  checked>
														<label class="form-check-label"
															for="flexSwitchCheckChecked">{{ __('Remember me') }}</label>
														</div>
												</div>


												
												{{-- Forgot Password --}}
												<div class="col-md-6 text-end">													
													@if (Route::has('password.request'))
                                                <a class="text-muted" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                   		         @endif											
												</div>


												
												{{-- login button  --}}
												<div class="col-12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary" name="login"><i
																class="bx bxs-lock-open"></i>{{ __('Log in') }}</button>
													</div>
												</div>
											</form>


										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		








@endsection		