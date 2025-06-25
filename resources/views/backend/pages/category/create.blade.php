@extends('layout.backend.backmaster')


@section('backend_main')



    <form method="POST" action="{{route('category.store')}}">
        @CSRF
        <div class="form-group card-body">
            <div class="card">


                <div class="card-body">
                    <label>Category name</label>
                    <input class="form-control" type="text" placeholder="Category name" name="category_name" required>
                </div>


                <div class="card-body">
                    <label>Category slug</label>
                    <input class="form-control" type="text" placeholder="Category slug" name="category_slug" required>
                </div>

                <div class="card-body">
                    <label>Category description</label>
                    <input class="form-control" type="text" placeholder="Category description" name="category_description"
                        required>
                </div>




                <div class="card-body">
                    <label>Category image</label>
                    <form>
                        <input type="file" class="form-control" id="image-uploadify" placeholder="uploade image" name="category_image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                    </form>
                </div>




            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

@endsection