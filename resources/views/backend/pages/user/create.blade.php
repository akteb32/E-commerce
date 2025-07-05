@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                            @CSRF
                            <div class="form-group card-body">
                                <div class="card">


                                    {{-- add role --}}
                                    <div class="card-body">
                                        <label>User Role</label>
                                        <select name="roles" class="form-control">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>User Name</label>
                                        <input class="form-control" type="text" placeholder="user name" name="user_name"
                                            required>
                                    </div>


                                    {{-- phone --}}
                                    <div class="card-body">
                                        <label>Phone Number</label>
                                        <input class="form-control" type="text" placeholder="user phone"
                                            name="user_phone">
                                    </div>


                                    {{-- address --}}
                                    <div class="card-body">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="user address"
                                            name="user_address">
                                    </div>


                                    {{-- city --}}
                                    <div class="card-body">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="user city" name="user_city">
                                    </div>


                                    {{-- postal_code --}}
                                    <div class="card-body">
                                        <label>Postal Code</label>
                                        <input class="form-control" type="text" placeholder="user postal code"
                                            name="user_postal_code">
                                    </div>


                                    {{-- country --}}
                                    <div class="card-body">
                                        <label>Country</label>
                                        <input class="form-control" type="text" placeholder="user country"
                                            name="user_country">
                                    </div>


                                    {{-- password --}}
                                    <div class="card-body">
                                        <label>Password</label>
                                        <input class="form-control" type="password" placeholder="password"
                                            name="user_password" required>
                                    </div>


                                    {{-- email --}}
                                    <div class="card-body">
                                        <label>Email Address</label>
                                        <input class="form-control" type="email" placeholder="email address"
                                            name="user_email" required>
                                    </div>




                                    {{-- activation --}}
                                    <div class="card-body">
                                        <label>User activation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="user_is_active"
                                                id="is_active_1" value="1">
                                            <label class="form-check-label" for="is_active_1">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="user_is_active"
                                                id="is_active_0" value="0">
                                            <label class="form-check-label" for="is_active_0">Inactive</label>
                                        </div>
                                    </div>

                                    {{-- avatar --}}
                                    <div class="card-body">
                                        <label>User image</label>
                                        {{-- Upload new image --}}
                                        <input type="file" class="form-control" name="user_avatar" id="image-uploadify"
                                            accept="image/*">
                                    </div>


                                    {{-- button --}}
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
