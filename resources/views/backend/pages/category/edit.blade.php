@extends('layout.backend.backmaster')


    @section('backend_main')


    


  <form method="POST" action="{{route('category.update',$category->id)}}">
        @CSRF
        @method('PUT')
        <div class="form-group">
            <label>Category name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="category_name" value="{{$category->name}}" required>
        </div>
        <div class="form-group">
            <label>Category slug</label>
            <input type="text" class="form-control" placeholder="Enter slug" name="category_slug" value="{{$category->slug}}" required>
        </div>
        <div class="form-group">
            <label>Category description</label>
            <input type="text" class="form-control" placeholder="Enter description" name="category_description" value="{{$category->description}}">
        </div>
        <div class="form-group col-xl-9 mx-auto">
            <label>Category image</label>			
						<div class="card">
							<div class="card-body">
								<form>
									<input type="file"  class="form-control" id="image-uploadify" placeholder="uploade image " name="category_image" value="{{$category->image}}" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
								</form>
							</div>
						</div>
					</div>
    
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>






















    @endsection