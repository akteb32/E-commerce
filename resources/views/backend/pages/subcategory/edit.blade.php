@extends('backend.layouts.backmaster')

@section('main')

<!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{route('subcategory.update', $subcategory->id)}}">
                            @CSRF
                            @method('PUT')
                            <div class="form-group card-body">
                                <div class="card">

                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>Subcategory name</label>
                                        <input class="form-control" type="text" placeholder="Subcategory name"
                                            name="subcategory_name" value="{{$subcategory->name}}" required>
                                    </div>


                                    {{-- slug --}}
                                    <div class="card-body">
                                        <label>Subcategory slug</label>
                                        <input class="form-control" type="text" placeholder="Subcategory slug"
                                            name="subcategory_slug" value="{{$subcategory->slug}}" required>
                                    </div>


                                    {{-- description --}}
                                    <div class="card-body">
                                        <label>Subcategory description</label>
                                        <input class="form-control" type="text" placeholder="Subcategory description" value="{{$subcategory->description}}"
                                            name="subcategory_description" required>
                                    </div>

                                    {{-- sort_order --}}
                                    <div class="card-body">
                                        <label>Subcategory sort order</label>
                                        <input type="select" class="form-control" placeholder="sort_order" value="{{$subcategory->sort_order}}"
                                            name="subcategory_sort_order">
                                    </div>



                                    {{-- meta_title --}}
                                    <div class="card-body">
                                        <label>Subcategory meta title</label>
                                        <input type="text" class="form-control" placeholder="meta_title" value="{{$subcategory->meta_title}}"
                                            name="subcategory_meta_title">
                                    </div>


                                    {{-- meta_description --}}
                                    <div class="card-body">
                                        <label>Subcategory meta description</label>
                                        <input type="text" class="form-control" placeholder="meta_description" value="{{$subcategory->meta_description}}"
                                            name="subcategory_meta_description">
                                    </div>

                                    {{-- activation --}}
                                    <div class="card-body">
                                        <p>Subcategory activation</p>
                                        <div class="form-check form-check-inline">
                                            <label>Active</label>
                                            <input type="radio" class="form-check-input" id="active"
                                                 value="{{$subcategory->is_active}}" name="subcategory_is_active">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label>inActive</label>
                                            <input type="radio" class="form-check-input" id="inactive"
                                                 value="{{$subcategory->is_active}}" name="subcategory_is_active">
                                        </div>
                                    </div>


                                    {{-- image --}}
                                    <div class="card-body">
                                        <label>Subcategory image</label>
                                        <form>
                                            <input type="file" class="form-control" id="image-uploadify"
                                                placeholder="uploade image" name="subcategory_image" value="{{$subcategory->image}}"
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