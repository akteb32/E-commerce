@extends('layout.backend.backmaster')


@section('backend_main')



    <form method="POST" action="{{route('subcategory.store')}}">
        @CSRF
        <div class="form-group card-body">
            <div class="card">


                <div class="card-body">
                    <label>Subcategory name</label>
                    <input class="form-control" type="text" placeholder="Subcategory name" name="subcategory_name" required>
                </div>


                <div class="card-body">
                    <label>Subcategory slug</label>
                    <input class="form-control" type="text" placeholder="Subcategory slug" name="subcategory_slug" required>
                </div>

                <div class="card-body">
                    <label>Subcategory description</label>
                    <input class="form-control" type="text" placeholder="Subcategory description" name="subcategory_description"  required>
                </div>




                <div class="card-body">
                    <label>Subcategory image</label>
                    <form>
                        <input type="file" class="form-control" id="image-uploadify" placeholder="uploade image" name="subcategory_image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                    </form>
                </div>


                <div class="form-group">
                     <label>Subcategory is_active</label>
                     <input type="text" class="form-control" placeholder="is_active ?" name="subcategory_is_active" required>
                  </div>
      
                 <div class="form-group">
                      <label>Subcategory sort_order</label>
                     <input type="textbox" class="form-control" placeholder="sort_order" name="subcategory_sort_order" required>
                </div>


            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

@endsection