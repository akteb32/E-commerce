@extends('backend.layouts.backmaster')

@section('main')

<!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{route('user.update', $User->id)}}">
                            @CSRF
                            @method('PUT')
                            <div class="form-group card-body">
                                <div class="card">

                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>User Name</label>
                                        <input class="form-control" type="text" placeholder="user name"
                                            name="user_name" value="{{$User->name}}" required>
                                    </div>


                                    {{-- phone --}}
                                    <div class="card-body">
                                        <label>Phone Number</label>
                                        <input class="form-control" type="text" placeholder="user phone"
                                            name="user_phone" value="{{$User->phone}}" required>
                                    </div>

                                    
                                    {{-- address --}}
                                    <div class="card-body">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="user address"
                                            name="user_address" value="{{$User->address}}" required>
                                    </div>


                                    {{-- city --}}
                                    <div class="card-body">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="user city"
                                            name="user_city" value="{{$User->city}}" >
                                    </div>


                                    {{-- postal_code --}}
                                    <div class="card-body">
                                        <label>Postal Code</label>
                                        <input class="form-control" type="text" placeholder="user postal code"
                                            name="user_postal_code" value="{{$User->postal_code}}" >
                                    </div>


                                    {{-- country --}}
                                    <div class="card-body">
                                        <label>Country</label>
                                        <input class="form-control" type="text" placeholder="user country"
                                            name="user_country" value="{{$User->country}}" >
                                    </div>


                                    {{-- password --}}
                                    <div class="card-body">
                                        <label>Password</label>
                                        <input class="form-control" type="password" placeholder="password"
                                            name="user_password" value="{{$User->password}}" required>
                                    </div>


                                    {{-- email --}}
                                    <div class="card-body">
                                        <label>Email Address</label>
                                        <input class="form-control" type="email" placeholder="email address"
                                            name="user_email" value="{{$User->email}}" required>
                                    </div>


                                    {{-- email_verified_at --}}
                                    <div class="card-body">
                                        <label>Email verified_at</label>
                                        <input type="datetime" class="form-control" placeholder="email_verified_at" value="{{$User->email_verified_at}}"
                                            name="user_email_verified_at">
                                    </div>


                                    {{-- activation --}}
                                    <div class="card-body">
                                        <p>User activation</p>
                                        <div class="form-check form-check-inline">
                                            <label>Active</label>
                                            <input type="radio" class="form-check-input" id="active"
                                                 value="{{$User->is_active}}" name="user_is_active">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label>inActive</label>
                                            <input type="radio" class="form-check-input" id="inactive"
                                                 value="{{$User->is_active}}" name="user_is_active">
                                        </div>
                                    </div>


                                    {{-- avatar --}}
                                    <div class="card-body">
                                        <label>Avatar image</label>
                                        <form>
                                            <input type="file" class="form-control" id="image-uploadify"
                                                placeholder="uploade image" name="user_avatar" value="{{$User->avatar}}"
                                                accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                                multiple>
                                        </form>
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