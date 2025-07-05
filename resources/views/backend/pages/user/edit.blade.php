@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                            @CSRF
                            @method('PUT')
                            <div class="form-group card-body">
                                <div class="card">





                                    {{-- edit role --}}
                                    <div class="card-body">
                                        <label>User Role</label>
                                        <select name="roles" class="form-control">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>




                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>User Name</label>
                                        <input class="form-control" type="text" placeholder="user name" name="user_name"
                                            value="{{ $user->name }}" required>
                                    </div>


                                    {{-- phone --}}
                                    <div class="card-body">
                                        <label>Phone Number</label>
                                        <input class="form-control" type="text" placeholder="user phone"
                                            name="user_phone" value="{{ $user->phone }}" >
                                    </div>


                                    {{-- address --}}
                                    <div class="card-body">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="user address"
                                            name="user_address" value="{{ $user->address }}" >
                                    </div>


                                    {{-- city --}}
                                    <div class="card-body">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="user city" name="user_city"
                                            value="{{ $user->city }}">
                                    </div>


                                    {{-- postal_code --}}
                                    <div class="card-body">
                                        <label>Postal Code</label>
                                        <input class="form-control" type="text" placeholder="user postal code"
                                            name="user_postal_code" value="{{ $user->postal_code }}">
                                    </div>


                                    {{-- country --}}
                                    <div class="card-body">
                                        <label>Country</label>
                                        <input class="form-control" type="text" placeholder="user country"
                                            name="user_country" value="{{ $user->country }}">
                                    </div>


                                    {{-- email --}}
                                    <div class="card-body">
                                        <label>Email Address</label>
                                        <input class="form-control" type="email" placeholder="email address"
                                            name="user_email" value="{{ $user->email }}" required>
                                    </div>


                                 


                                    {{-- activation --}}
                                    <div class="card-body">
                                        <label>User activation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="user_is_active"
                                                id="is_active_1" value="1" {{ $user->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_active_1">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="user_is_active"
                                                id="is_active_0" value="0" {{ !$user->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_active_0">Inactive</label>
                                        </div>
                                    </div>



                                    {{-- avatar --}}
                                    <div class="card-body">
                                        <label>User image</label>

                                        {{-- Show current image --}}
                                        @if ($user->avatar)
                                            <div class="mb-3">
                                                <label>Current Image:</label><br>
                                                <img src="{{ asset('storage/' . $user->avatar) }}" width="120"
                                                    class="img-thumbnail">
                                            </div>
                                        @endif


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
