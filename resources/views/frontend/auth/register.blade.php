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
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Create an Account</h1>
                                        <p class="mb-30">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                                    </div>



                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Name -->
                                        <div class="form-group">
                                            <input type="text" id="name" required="" name="name" placeholder="Username"
                                                required autofocus autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>


                                        <!-- Email Address -->
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" placeholder="Email" required
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>






                                        <!-- Password -->
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" placeholder="Password"
                                                required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>


                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <input type="password" id="password_confirmation" name="password_confirmation"
                                                placeholder="Confirm password" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                    
                                        <div class="form-group mb-30">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">{{ __('Register') }}</button>
                                        </div>

                                        <p class="font-xs text-muted"><strong>Note:</strong>Your personal data will be used
                                            to support your experience throughout this website, to manage access to your
                                            account, and for other purposes described in our privacy policy</p>
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