@extends('layout.backend.backmaster')


    @section('backend_main')


    


  <form method="POST" action="{{route('subcategory.update',$subcategory->id)}}">
        @CSRF
        @method('PUT')
        <div class="form-group">
            <label>Subcategory name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="subcategory_name" value="{{$subcategory->name}}" required>
        </div>
        <div class="form-group">
            <label>Subcategory slug</label>
            <input type="text" class="form-control" placeholder="Enter slug" name="subcategory_slug" value="{{$subcategory->slug}}" required>
        </div>
        <div class="form-group">
            <label>Subcategory description</label>
            <input type="text" class="form-control" placeholder="Enter description" name="subcategory_description" value="{{$subcategory->description}}">
        </div>
        <div class="form-group col-xl-9 mx-auto">
            <label>Subcategory image</label>			
						<div class="card">
							<div class="card-body">
								<form>
									<input type="file"  class="form-control" id="image-uploadify" placeholder="uploade image " name="subcategory_image" value="{{$subcategory->image}}" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
								</form>
							</div>
						</div>
					</div>
    

        <div class="form-group">
            <label>Subcategory is_active</label>
            <input type="text" class="form-control" placeholder="is_active ?" name="subcategory_is_active" value="{{$subcategory->is_active}}">
        </div>
        <div class="form-group">
            <label>Subcategory sort_order</label>
            <input type="select" class="form-control" placeholder="sort_order" name="subcategory_sort_order" value="{{$subcategory->sort_order}}">
        </div>



        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>






















    @endsection