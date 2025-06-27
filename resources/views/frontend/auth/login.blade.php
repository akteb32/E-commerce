@extends('frontend.layouts.frontmaster')

@section('main')


    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Pages <span></span> My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <img class="border-radius-15" src="{{asset('frontend/assets/imgs/page/login-1.png')}}" alt="" />
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Login</h1>
                                        <p class="mb-30">Don't have an account? <a
                                                href="{{ route('password.request') }}">Create here</a>
                                        </p>
                                    </div>


                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf


                                        <!-- Email Address -->
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" placeholder="Username or Email *"
                                                required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        </div>

                                       
                                        <!-- Password -->
                                        <div class="form-group">
                                            <input id="password" type="password" name="password" required
                                                autocomplete="current-password" placeholder="Enter your password *" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>



                                        <!-- Remember Me -->
                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" checked name="remember"
                                                        id="remember_me" />
                                                    <label class="form-check-label"
                                                        for="exampleCheckbox1"><span>{{ __('Remember me') }}</span></label>
                                                </div>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a class="text-muted" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                            @endif
                                        </div>



                                            <div class="form-group">
                                                <button type="submit" class="btn btn-heading btn-block hover-up"
                                                    name="login">{{ __('Log in') }}</button>
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