@extends('backend.layouts.backmaster')

@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">





                        {{-- form --}}
                        <form method="POST" action="{{ route('product.update', $product->id) }}"
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
                                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    {{-- subcategory name --}}
                                    <div class="card-body">
                                        <label>Subcategory name</label>
                                        <select name="subcategory_id" class="form-control" required>
                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}"
                                                    {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                                    {{ $subcategory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>



                                    {{-- name --}}
                                    <div class="card-body">
                                        <label>Product name</label>
                                        <input class="form-control" type="text" placeholder="product name"
                                            name="product_name" value="{{ $product->name }}" required>
                                    </div>


                                    {{-- slug --}}
                                    <div class="card-body">
                                        <label>Product slug</label>
                                        <input class="form-control" type="text" placeholder="product slug"
                                            name="product_slug" value="{{ $product->slug }}" required>
                                    </div>


                                    {{-- description --}}
                                    <div class="card-body">
                                        <label>Product description</label>
                                        <input class="form-control" type="text" placeholder="product description"
                                            value="{{ $product->description }}" name="product_description" required>
                                    </div>



                                    {{-- short_description --}}
                                    <div class="card-body">
                                        <label>Product short_description</label>
                                        <input class="form-control" type="text" placeholder="product short_description"
                                            value="{{ $product->short_description }}" name="product_short_description"
                                            required>
                                    </div>


                                    {{-- sku --}}
                                    <div class="card-body">
                                        <label>Product sku</label>
                                        <input class="form-control" type="text" placeholder="product sku"
                                            value="{{ $product->sku }}" name="product_sku" required>
                                    </div>



                                    {{-- price --}}
                                    <div class="card-body">
                                        <label>Product price</label>
                                        <input class="form-control" type="number" placeholder="product price"
                                            value="{{ $product->price }}" name="product_price" required>
                                    </div>




                                    {{-- sale_price --}}
                                    <div class="card-body">
                                        <label>Product sale_price</label>
                                        <input class="form-control" type="number" placeholder="product sale_price"
                                            value="{{ $product->sale_price }}" name="product_sale_price" required>
                                    </div>



                                    {{-- cost_price --}}
                                    <div class="card-body">
                                        <label>Product cost_price</label>
                                        <input class="form-control" type="number" placeholder="product cost_price"
                                            value="{{ $product->cost_price }}" name="product_cost_price" required>
                                    </div>



                                    {{-- stock_quantity --}}
                                    <div class="card-body">
                                        <label>Product stock_quantity</label>
                                        <input class="form-control" type="number" placeholder="product stock_quantity"
                                            value="{{ $product->stock_quantity }}" name="product_stock_quantity" required>
                                    </div>



                                    {{-- min_quantity --}}
                                    <div class="card-body">
                                        <label>Product min_quantity</label>
                                        <input class="form-control" type="number" placeholder="product min_quantity"
                                            value="{{ $product->min_quantity }}" name="product_min_quantity" required>
                                    </div>


                                    {{-- weight --}}
                                    <div class="card-body">
                                        <label>Product weight</label>
                                        <input class="form-control" type="text" placeholder="product weight"
                                            value="{{ $product->weight }}" name="product_weight" required>
                                    </div>


                                    {{-- dimensions --}}
                                    <div class="card-body">
                                        <label>Product dimensions</label>
                                        <input class="form-control" type="text" placeholder="product dimensions"
                                            value="{{ $product->dimensions }}" name="product_dimensions" required>
                                    </div>



                                    {{-- manage_stock --}}
                                    <div class="card-body">
                                        <label for="product_manage_stock">Manage Stock</label><br>
                                        <input type="checkbox" name="product_manage_stock" id="product_manage_stock"
                                            value="1"
                                            {{ old('product_manage_stock', $product->manage_stock) ? 'checked' : '' }}>
                                        <label for="product_manage_stock">Enable Stock Management</label>
                                    </div>




                                    {{-- stock_status --}}
                                    <div class="card-body">
                                        <label for="product_stock_status">Stock Status</label>
                                        <select name="product_stock_status" class="form-control"
                                            id="product_stock_status">
                                            <option value="in_stock"
                                                {{ old('product_stock_status', $product->stock_status) == 'in_stock' ? 'selected' : '' }}>
                                                In Stock</option>
                                            <option value="out_of_stock"
                                                {{ old('product_stock_status', $product->stock_status) == 'out_of_stock' ? 'selected' : '' }}>
                                                Out of Stock</option>
                                            <option value="on_backorder"
                                                {{ old('product_stock_status', $product->stock_status) == 'on_backorder' ? 'selected' : '' }}>
                                                On Backorder</option>
                                        </select>
                                    </div>





                                    {{-- meta_title --}}
                                    <div class="card-body">
                                        <label>Product meta title</label>
                                        <input type="text" class="form-control" placeholder="meta_title"
                                            value="{{ $product->meta_title }}" name="product_meta_title">
                                    </div>



                                    {{-- meta_description --}}
                                    <div class="card-body">
                                        <label>Product meta description</label>
                                        <input type="text" class="form-control" placeholder="meta_description"
                                            value="{{ $product->meta_description }}" name="product_meta_description">
                                    </div>




                                    {{-- activation --}}
                                    <div class="card-body">
                                        <label>Product activation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="product_is_active"
                                                id="is_active_1" value="1" {{ $product->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="product_is_active"
                                                id="is_active_0" value="0"
                                                {{ !$product->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inactive">Inactive</label>
                                        </div>
                                    </div>



                                    {{-- Featured --}}
                                    <div class="card-body">
                                        <label>Product featured</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="product_is_featured"
                                                id="is_featured_1" value="1"
                                                {{ $product->is_featured ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_featured_1">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="product_is_featured"
                                                id="is_featured_0" value="0"
                                                {{ !$product->is_featured ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_featured_0">Inactive</label>
                                        </div>
                                    </div>





                                    {{-- image --}}
                                    <div class="card-body">
                                        <label>Product image</label>

                                        {{-- Show current image --}}
                                        @if ($product->image)
                                            <div class="mb-3">
                                                <label>Current Image:</label><br>
                                                <img src="{{ asset('storage/' . $product->image) }}" width="120"
                                                    class="img-thumbnail">
                                            </div>
                                        @endif

                                        {{-- Upload new image --}}
                                        <input type="file" class="form-control" name="product_image"
                                            id="image-uploadify" accept="image/*">
                                    </div>


                                    {{-- gallery --}}
                                    {{-- <div class="card-body">
                                        <label>Product gallery</label>
                                       
                                            <input type="file" class="form-control" id="product_gallery"
                                                placeholder="Uploade image" name="product_gallery" value="{{$product->gallery}}"
                                                accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                                multiple>
                                        
                                    </div> --}}




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
