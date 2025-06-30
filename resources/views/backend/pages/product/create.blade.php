@extends('backend.layouts.backmaster')

@section('main')


    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{route('product.store')}}">
                            @CSRF
                            <div class="form-group card-body">
                                <div class="card">

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
                                            name="product_description" >
                                    </div>

                                    {{-- short_description --}}
                                    <div class="card-body">
                                        <label>product short_description</label>
                                        <input class="form-control" type="text" placeholder="product short_description"
                                            name="product_short_description" >
                                    </div>


                                    {{-- sku --}}
                                    <div class="card-body">
                                        <label>product sku</label>
                                        <input class="form-control" type="text" placeholder="product sku"
                                            name="product_sku" required>
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
                                        <input type="number" class="form-control" placeholder="Product weight"
                                            name="product_weight">
                                    </div>

                                    {{-- dimensions --}}
                                    <div class="card-body">
                                        <label>Product dimensions</label>
                                        <input type="select" class="form-control" placeholder="Product dimensions"
                                            name="product_dimensions">
                                    </div>

                                    {{-- manage_stock --}}
                                    <div class="card-body">
                                        <label>Product manage_stock</label>
                                        <input type="number" class="form-control" placeholder="Product manage_stock"
                                            name="product_manage_stock">
                                    </div>

                                    {{-- stock_status --}}
                                    <div class="card-body">
                                        <label>Product stock_status</label>
                                        <input type="text" class="form-control" placeholder="Product stock_status"
                                            name="product_stock_status">
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
                                        <p>product activation</p>
                                        <div class="form-check form-check-inline">
                                            <label>Active</label>
                                            <input type="radio" class="form-check-input" id="active"
                                                value="1" name="product_is_active">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label>inActive</label>
                                            <input type="radio" class="form-check-input" id="inactive"
                                                 value="0" name="product_is_active">
                                        </div>
                                    </div>


                                    {{-- Featured --}}
                                    <div class="card-body">
                                        <p>Product featured</p>
                                        <div class="form-check form-check-inline">
                                            <label>Featured</label>
                                            <input type="radio" class="form-check-input" id="featured"
                                                value="1" name="product_is_featured">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label>unFeatured</label>
                                            <input type="radio" class="form-check-input" id="unfeatured"
                                                 value="0" name="product_is_featured">
                                        </div>
                                    </div>


                                    {{-- image --}}
                                    <div class="card-body">
                                        <label>Product image</label>
                                        <form>
                                            <input type="file" class="form-control" id="image-uploadify"
                                                placeholder="uploade image" name="product_image"
                                                accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                                multiple>
                                        </form>
                                    </div>

                                    {{-- gallery --}}
                                    <div class="card-body">
                                        <label>Product gallery</label>
                                        <form>
                                            <input type="file" class="form-control" id="product_gallery"
                                                placeholder="uploade images" name="product_gallery"
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