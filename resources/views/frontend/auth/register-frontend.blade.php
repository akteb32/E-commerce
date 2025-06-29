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
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="row w-100 justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">


                                    {{-- div 1 --}}
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Create an Account</h1>
                                        <p class="mb-30">Already have an account? <a href="{{ route('login') }}">Login</a>
                                        </p>
                                    </div>

                                    {{-- div 2 --}}
                                    <div class="form-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <!-- Name -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">Name</label>
                                                <input type="text" id="name" name="name" placeholder="Username" required
                                                    autofocus autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>


                                            <!-- Email Address -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">Email</label>
                                                <input type="email" id="email" name="email" placeholder="Email" required
                                                    autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>


                                            <!-- phone -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">Phone Number</label>
                                                <input type="text" id="phone" name="phone" placeholder="your phone number"
                                                    autofocus autocomplete="phone" />
                                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                            </div>


                                            <!-- address -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">Address</label>
                                                <input type="text" id="address" name="address" placeholder="address"
                                                    autofocus autocomplete="address" />
                                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                            </div>


                                            <!-- 	city -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">City</label>
                                                <input type="text" id="city" name="city" placeholder="city" autofocus
                                                    autocomplete="city" />
                                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                            </div>


                                            <!-- 	postal_code -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">postal code</label>
                                                <input type="text" id="postal_code" name="postal_code"
                                                    placeholder="postal_code" autofocus autocomplete="postal_code" />
                                                <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
                                            </div>




                                            <!-- Password -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">Password</label>
                                                <input type="password" id="password" name="password" placeholder="Password"
                                                    required autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>


                                            <!-- Confirm Password -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">Confirm Password</label>
                                                <input type="password" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Confirm password" required
                                                    autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password_confirmation')"
                                                    class="mt-2" />
                                            </div>

                                            {{-- Country --}}
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">Country</label>
                                                <select class="form-select" id="country" name="country"
                                                    aria-label="Default select example" autofocus autocomplete="country">
                                                    <option selected>jordan</option>
                                                    <option value="1">United Kingdom</option>
                                                    <option value="2">America</option>
                                                    <option value="3">Dubai</option>
                                                    <option value="4">Egypt</option>
                                                    <option value="5">UAE</option>
                                                </select>
                                                <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                            </div>


                                            <!-- 	avatar -->
                                            <div class="form-group">
                                                <label for="inputSelectCountry" class="form-label">Avatar</label>
                                                <input type="file" id="avatar" name="avatar" placeholder="your avatar"
                                                    autofocus autocomplete="avatar" class="form-control" />
                                                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                                            </div>

                                          


                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>


                                            <div class="form-group mb-30">
                                                <button type="submit"
                                                    class="btn btn-fill-out btn-block hover-up font-weight-bold"
                                                    name="login">{{ __('Register') }}</button>
                                            </div>

                                            <p class="font-xs text-muted"><strong>Note:</strong>Your personal
                                                data will
                                                be
                                                used
                                                to support your experience throughout this website, to manage
                                                access to
                                                your
                                                account, and for other purposes described in our privacy policy
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

























<style>
        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group input[type="file"],
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            font-size: 15px;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            background-color: #fdfdfd;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease-in-out;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #80bdff;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }

        .form-body {
            padding: 30px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        }

        .btn-block {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
        }

        .heading_s1 h1 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }

        .heading_s1 p a {
            color: #28a745;
            font-weight: 500;
        }

        .font-xs {
            font-size: 13px;
            color: #666;
        }

        #avatar {
            border: none;
            outline: none;
            background: none;
            padding: 0;
            box-shadow: none;
        }
</style>




@endsection