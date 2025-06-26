@extends('layout.backend.backmaster')

@section('backend_main')



    <form method="POST" action="{{route('category.store')}}">
        @CSRF
        <div class="form-group card-body">
            <div class="card">


                  <div class="form-group">
            <label>product name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="product_name"  required>
        </div>

        <div class="form-group">
            <label>product slug</label>
            <input type="text" class="form-control" placeholder="product slug" name="product_slug"  required>
        </div>
     
        <div class="form-group">
            <label>product description</label>
            <input type="text" class="form-control" placeholder="product description" name="product_description" required>
        </div>
     
        <div class="form-group">
            <label>product short_description</label>
            <input type="text" class="form-control" placeholder="product short_description" name="product_short_description"  required>
        </div>

        <div class="form-group">
            <label>product sku</label>
            <input type="text" class="form-control" placeholder="product sku" name="product_sku"  required>
        </div>

        <div class="form-group">
            <label>product price</label>
            <input type="text" class="form-control" placeholder="product price" name="product_price"required>
        </div>

        <div class="form-group">
            <label>product sale_price</label>
            <input type="text" class="form-control" placeholder="product sale_price" name="product_sale_price" required>
        </div>

        <div class="form-group">
            <label>product cost_price</label>
            <input type="text" class="form-control" placeholder="product cost_price" name="product_cost_price" required>
        </div>

        <div class="form-group">
            <label>product stock_quantity</label>
            <input type="text" class="form-control" placeholder="product stock_quantity" name="product_stock_quantity" required>
        </div>

        <div class="form-group">
            <label>product min_quantity</label>
            <input type="text" class="form-control" placeholder="product min_quantity" name="product_min_quantity" required>
        </div>
     
        <div class="form-group">
            <label>product weight</label>
            <input type="text" class="form-control" placeholder="product weight" name="product_weight"  required>
        </div>
     
        <div class="form-group">
            <label>product dimensions</label>
            <input type="text" class="form-control" placeholder="product dimensions" name="product_dimensions"  required>
        </div>
     
        <div class="form-group">
            <label>product is_active</label>
            <input type="text" class="form-control" placeholder="product is_active" name="product_is_active"  required>
        </div>
     
        <div class="form-group">
            <label>product is_featured</label>
            <input type="text" class="form-control" placeholder="product is_featured" name="product_is_featured" required>
        </div>
     
        <div class="form-group">
            <label>product manage_stock</label>
            <input type="text" class="form-control" placeholder="product manage_stock" name="product_manage_stock" required>
        </div>
     
        <div class="form-group">
            <label>product stock_status</label>
            <input type="text" class="form-control" placeholder="product stock_status" name="product_stock_status" required>
        </div>
     
 
        <div class="form-group col-xl-9 mx-auto">
            <label>product image</label>
            <div class="card">
                <div class="card-body">
                    <form>
                        <input type="file" class="form-control" id="image-uploadify" placeholder="uploade image " name="product_image"  accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                    </form>
                </div>
            </div>
        </div>

  
       <div class="form-group">
            <label>product gallery</label>
        </div>
     
         <div class="form-group">
            <label>product meta_title</label>
            <input type="text" class="form-control" placeholder="product meta_title" name="product_meta_title" >
        </div>
     
         <div class="form-group">
            <label>product meta_description</label>
            <input type="text" class="form-control" placeholder="product meta_description" name="product_meta_description" >
        </div>
     



            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>   




@endsection