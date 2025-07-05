@extends('backend.layouts.backmaster')

@section('main')


    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                            @CSRF
                            <div class="form-group card-body">
                                <div class="card">


                                    {{-- category name --}}
                                    <div class="card-body">
                                        <label>Category name</label>
                                        <select name="category_id" class="form-control" required>

                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    {{-- subcategory name --}}
                                    <div class="card-body">
                                        <label>Subcategory name</label>
                                        <select name="subcategory_id" class="form-control" required>

                                            @foreach($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>product name</label>
                                        <input class="form-control" type="text" placeholder="product name"
                                            name="product_name" required>
                                    </div>


                                    {{-- slug --}}
                                    <div class="card-body">
                                        <label>product slug</label>
                                        <input class="form-control" type="text" placeholder="product slug"
                                            name="product_slug" required>
                                    </div>


                                    {{-- description --}}
                                    <div class="card-body">
                                        <label>product description</label>
                                        <input class="form-control" type="text" placeholder="product description"
                                            name="product_description">
                                    </div>

                                    {{-- short_description --}}
                                    <div class="card-body">
                                        <label>product short_description</label>
                                        <input class="form-control" type="text" placeholder="product short_description"
                                            name="product_short_description">
                                    </div>


                                    {{-- sku --}}
                                    <div class="card-body">
                                        <label>product sku</label>
                                        <input class="form-control" type="text" placeholder="product sku" name="product_sku"
                                            required>
                                    </div>


                                    {{-- price --}}
                                    <div class="card-body">
                                        <label>Product price</label>
                                        <input type="number" class="form-control" placeholder="Product price"
                                            name="product_price">
                                    </div>

                                    {{-- sale_price --}}
                                    <div class="card-body">
                                        <label>Product sale_price</label>
                                        <input type="number" class="form-control" placeholder="Product sale_price"
                                            name="product_sale_price">
                                    </div>


                                    {{-- cost_price --}}
                                    <div class="card-body">
                                        <label>Product cost_price</label>
                                        <input type="number" class="form-control" placeholder="Product cost_price"
                                            name="product_cost_price">
                                    </div>

                                    {{-- stock_quantity --}}
                                    <div class="card-body">
                                        <label>Product stock_quantity</label>
                                        <input type="number" class="form-control" placeholder="Product stock_quantity"
                                            name="product_stock_quantity">
                                    </div>

                                    {{-- min_quantity --}}
                                    <div class="card-body">
                                        <label>Product min_quantity</label>
                                        <input type="number" class="form-control" placeholder="Product min_quantity"
                                            name="product_min_quantity">
                                    </div>

                                    {{-- weight --}}
                                    <div class="card-body">
                                        <label>Product weight</label>
                                        <input type="text" class="form-control" placeholder="Product weight"
                                            name="product_weight">
                                    </div>

                                    {{-- dimensions --}}
                                    <div class="card-body">
                                        <label>Product dimensions</label>
                                        <input type="text" class="form-control" placeholder="Product dimensions"
                                            name="product_dimensions">
                                    </div>

                                    {{-- manage_stock --}}
                                    <div class="card-body">
                                        <label for="product_manage_stock">Manage Stock</label><br>
                                        <input type="checkbox" name="product_manage_stock" id="product_manage_stock"
                                            value="1">
                                        <label for="product_manage_stock">Enable Stock Management</label>
                                    </div>

                                    {{-- stock_status --}}
                                    <div class="card-body">
                                        <label for="product_stock_status">Stock Status</label>
                                        <select name="product_stock_status" class="form-control"
                                            id="product_stock_status">
                                            <option value="in_stock">In Stock</option>
                                            <option value="out_of_stock">Out of Stock</option>
                                            <option value="on_backorder"> On Backorder</option>
                                        </select>
                                    </div>


                                    {{-- meta_title --}}
                                    <div class="card-body">
                                        <label>Product meta title</label>
                                        <input type="text" class="form-control" placeholder="Product meta title"
                                            name="product_meta_title">
                                    </div>


                                    {{-- meta_description --}}
                                    <div class="card-body">
                                        <label>Product meta description</label>
                                        <input type="text" class="form-control" placeholder="Product meta description"
                                            name="product_meta_description">
                                    </div>

                                    {{-- activation --}}
                                    <div class="card-body">
                                        <label>Product activation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="product_is_active"
                                                id="is_active_1" value="1">
                                            <label class="form-check-label" for="is_active_1">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="product_is_active"
                                                id="is_active_0" value="0">
                                            <label class="form-check-label" for="is_active_0">Inactive</label>
                                        </div>
                                    </div>


                                    {{-- Featured --}}
                                   <div class="card-body">
                                        <label>Product featured</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="product_is_featured"
                                                id="is_featured_1" value="1">
                                            <label class="form-check-label" for="is_featured_1">Featured</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="product_is_featured"
                                                id="is_featured_0" value="0">
                                            <label class="form-check-label" for="is_featured_0">unFeatured</label>
                                        </div>
                                    </div>



                                    {{-- image --}}
                                    <div class="card-body">
                                        <label>Product image</label>
                                        <input type="file" class="form-control" name="product_image" id="image-uploadify"
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