@extends('layouts.app')

@section('content')

<div class="content-wrapper">
<!-- breadcrumb -->
<div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-4">
    <ul class="navbar-nav overflow-hidden">
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <span class="divider"> | </span>
          </li>
          <li>
            <a href="#">Menu</a>
          </li>
          <li>
            <span class="divider">  | </span>
          </li>
          <li>
            Menu Category
          </li>
      
    </ul>
</div>
<!-- breadcrumb -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           <a href="{{route('categories.create')}}" class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i> Add New</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12 table-responsive">
        <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Menu Items</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                    <tr>
                    <td width="10%">{{$category->order_id}}</td>
                    <td width="30%">
                    @if ($category->image)
    <img src="{{ url('uploads/' . $category->image) }}" alt="Category Image" width="100">
@else
    <img alt="Default Image" class="table-avatar" src="{{ asset('backend/dist/img/noimage.jpg') }}" style="max-width:100px">
@endif

</td>
                    <td width="30%">{{$category->name}}</td>
                    <td width="30%">{{$category->name}}</td>
                    
                      <td>
                      <div class="btn-group">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
                    </td>
                    </tr>
            @endforeach
                    </tbody>
                  </table>
                </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
