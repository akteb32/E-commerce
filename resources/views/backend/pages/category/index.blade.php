@extends('layout.backend.backmaster')


    @section('backend_main')


    


<div class="container-fluid py-2">
    <div class="row">
    <div class="col-12">
      <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3">Category table</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
        <table class="table align-items-center justify-content-center mb-0 text-center align-middle">
          <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">slug</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">image</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">is_active</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">sort_order</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">meta_title</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">meta_description</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Create_at</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Update_at</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" colspan="2">Action</th>
            <th ></th>

          </tr>
          </thead>
          <tbody>
        

          @foreach($categories as $category)

        <tr>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->id}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->name}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->slug}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->description}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->image}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->is_active}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->sort_order}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->meta_title}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$category->meta_description}}</p>
        </td>
        <td class="align-middle text-center text-sm">
        <p class="text-xs font-weight-bold mb-0">{{$category->created_at}}</p>
        </td>
        <td class="align-middle text-center">
        <p class="text-xs font-weight-bold mb-0">{{$category->updated_at}}</p>
        </td>
        <td class="align-middle text-center">
        <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
        </td>
        <td class="align-middle text-center">
        <form method="POST" action="/category-delete/{{$category->id}}" >
          @CSRF
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill shadow-sm px-3">Delete</button>
        </form>
        </td>
        </tr>

      @endforeach

          </tbody>
        </table>
        </div>
      </div>
      </div>
    </div>
    </div>






















    @endsection