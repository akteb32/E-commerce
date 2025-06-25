@extends('layout.backend.backmaster')


    @section('backend_main')


    


  <form method="POST" action="{{route('category.update',$category->id)}}">
        @CSRF
        @method('PUT')
        <div class="form-group">
            <label>Category name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="category_name" value="{{$category->name}}" required>
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>






















    @endsection