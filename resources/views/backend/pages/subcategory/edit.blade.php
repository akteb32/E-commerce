@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{ route('subcategory.update', $subcategory->id) }}"
                            enctype="multipart/form-data">
                            @CSRF
                            @method('PUT')
                            <div class="form-group card-body">
                                <div class="card">


                                    {{-- category name --}}
                                    <div class="card-body">
                                        <label>Category name</label>
                                        <select name="category_id" class="form-control" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>Subcategory name</label>
                                        <input class="form-control" type="text" placeholder="Subcategory name"
                                            name="subcategory_name" value="{{ $subcategory->name }}" required>
                                    </div>


                                    {{-- slug --}}
                                    <div class="card-body">
                                        <label>Subcategory slug</label>
                                        <input class="form-control" type="text" placeholder="Subcategory slug"
                                            name="subcategory_slug" value="{{ $subcategory->slug }}" required>
                                    </div>


                                    {{-- description --}}
                                    <div class="card-body">
                                        <label>Subcategory description</label>
                                        <input class="form-control" type="text" placeholder="Subcategory description"
                                            value="{{ $subcategory->description }}" name="subcategory_description" required>
                                    </div>

                                    {{-- sort_order --}}
                                    <div class="card-body">
                                        <label>Subcategory sort order</label>
                                        <input type="number" class="form-control" placeholder="sort_order"
                                            value="{{ $subcategory->sort_order }}" name="subcategory_sort_order">
                                    </div>



                                    {{-- meta_title --}}
                                    <div class="card-body">
                                        <label>Subcategory meta title</label>
                                        <input type="text" class="form-control" placeholder="meta_title"
                                            value="{{ $subcategory->meta_title }}" name="subcategory_meta_title">
                                    </div>


                                    {{-- meta_description --}}
                                    <div class="card-body">
                                        <label>Subcategory meta description</label>
                                        <input type="text" class="form-control" placeholder="meta_description"
                                            value="{{ $subcategory->meta_description }}"
                                            name="subcategory_meta_description">
                                    </div>

                                    {{-- activation --}}
                                    <div class="card-body">
                                        <label>Subcategory activation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="subcategory_is_active"
                                                id="active" value="1"
                                                {{ $subcategory->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="subcategory_is_active"
                                                id="inactive" value="0"
                                                {{ !$subcategory->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inactive">Inactive</label>
                                        </div>
                                    </div>



                                    {{-- image --}}
                                    <div class="card-body">
                                        <label>Subcategory image</label>

                                        {{-- Show current image --}}
                                        @if ($subcategory->image)
                                            <div class="mb-3">
                                                <label>Current Image:</label><br>
                                                <img src="{{ asset('storage/' . $subcategory->image) }}" width="120"
                                                    class="img-thumbnail">
                                            </div>
                                        @endif

                                        {{-- Upload new image --}}
                                        <input type="file" class="form-control" name="subcategory_image"
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
