@extends('layout.backend.backmaster')


    @section('backend_main')


    





   <form method="POST" action="{{route('category.store')}}">
        @CSRF
        <div class="form-group">
            <label>Category name</label>
            <input type="text"  name="category_name" required>
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>



















    @endsection