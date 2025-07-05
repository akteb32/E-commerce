@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{ route('category.store') }}">
                            @CSRF
                            <div class="form-group card-body">
                                <div class="card">

                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>Category name</label>
                                        <input class="form-control" type="text" placeholder="Category name"
                                            name="category_name" required>
                                    </div>


                                    {{-- slug --}}
                                    <div class="card-body">
                                        <label>Category slug</label>
                                        <input class="form-control" type="text" placeholder="Category slug"
                                            name="category_slug" required>
                                    </div>


                                    {{-- description --}}
                                    <div class="card-body">
                                        <label>Category description</label>
                                        <input class="form-control" type="text" placeholder="Category description"
                                            name="category_description" required>
                                    </div>


                                    {{-- sort_order --}}
                                    <div class="card-body">
                                        <label>Category sort order</label>
                                        <input type="number" class="form-control" placeholder="sort_order"
                                            name="category_sort_order">
                                    </div>


                                    {{-- meta_title --}}
                                    <div class="card-body">
                                        <label>Category meta title</label>
                                        <input type="text" class="form-control" placeholder="meta_title"
                                            name="category_meta_title">
                                    </div>


                                    {{-- meta_description --}}
                                    <div class="card-body">
                                        <label>Category meta description</label>
                                        <input type="text" class="form-control" placeholder="meta_description"
                                            name="category_meta_description">
                                    </div>

                                    {{-- activation --}}
                                    <div class="card-body">
                                        <p>category activation</p>
                                        <div class="form-check form-check-inline">
                                            <label>Active</label>
                                            <input type="radio" class="form-check-input" id="active" value="1"
                                                name="category_is_active">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label>inActive</label>
                                            <input type="radio" class="form-check-input" id="inactive" value="0"
                                                name="category_is_active">
                                        </div>
                                    </div>


                                    {{-- image --}}
                                    <div class="card-body">
                                        <label>Category image</label>
                                        <input type="file" class="form-control" name="category_image" accept="image/*">
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
