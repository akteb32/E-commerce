@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{ route('category.update', $category->id) }}"
                            enctype="multipart/form-data">
                            @CSRF
                            @method('PUT')
                            <div class="form-group card-body">
                                <div class="card">


                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>Category name</label>
                                        <input class="form-control" type="text" placeholder="Category name"
                                            name="category_name" value="{{ $category->name }}" required>
                                    </div>



                                    {{-- slug --}}
                                    <div class="card-body">
                                        <label>Category slug</label>
                                        <input class="form-control" type="text" placeholder="Category slug"
                                            name="category_slug" value="{{ $category->slug }}" required>
                                    </div>




                                    {{-- description --}}
                                    <div class="card-body">
                                        <label>Category description</label>
                                        <input class="form-control" type="text" placeholder="Category description"
                                            value="{{ $category->description }}" name="category_description" required>
                                    </div>




                                    {{-- sort_order --}}
                                    <div class="card-body">
                                        <label>Category sort order</label>
                                        <input type="number" class="form-control" placeholder="sort_order"
                                            value="{{ $category->sort_order }}" name="category_sort_order">
                                    </div>




                                    {{-- meta_title --}}
                                    <div class="card-body">
                                        <label>Category meta title</label>
                                        <input type="text" class="form-control" placeholder="meta_title"
                                            value="{{ $category->meta_title }}" name="category_meta_title">
                                    </div>




                                    {{-- meta_description --}}
                                    <div class="card-body">
                                        <label>Category meta description</label>
                                        <input type="text" class="form-control" placeholder="meta_description"
                                            value="{{ $category->meta_description }}" name="category_meta_description">
                                    </div>





                                    {{-- activation --}}
                                    <div class="card-body">
                                        <label>Category activation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category_is_active"
                                                id="active" value="1" {{ $category->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category_is_active"
                                                id="inactive" value="0" {{ !$category->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inactive">Inactive</label>
                                        </div>
                                    </div>




                                    {{-- image --}}
                                    <div class="card-body">
                                        <label>Category image</label>

                                        {{-- Show current image --}}
                                        @if ($category->image)
                                            <div class="mb-3">
                                                <label>Current Image:</label><br>
                                                <img src="{{ asset('storage/' . $category->image) }}" width="120"
                                                    class="img-thumbnail">
                                            </div>
                                        @endif

                                        {{-- Upload new image --}}
                                        <input type="file" class="form-control" name="category_image"
                                            id="image-uploadify" accept="image/*">
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
