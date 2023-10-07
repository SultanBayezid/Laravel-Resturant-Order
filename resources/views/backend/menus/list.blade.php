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
         Menu Items
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
            <h1>Menu Items</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           <a href="{{route('menus.create')}}" class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i> Add New</a>
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
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Is Vegetarian</th>
                <th>Calories</th>
                <th>Category</th>
                <th>Available</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->description }}</td>
                    <td>£{{ number_format($menu->price, 2) }}</td>
                    <td>{{ $menu->is_vegetarian ? 'Yes' : 'No' }}</td>
                    <td>{{ $menu->calories ?? 'N/A' }}</td>
                    <td>{{ $menu->category->name }}</td>
                    <td>{{ $menu->is_available ? 'Yes' : 'No' }}</td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('menus.show', $menu->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                        </div>  
                        <!-- Add a delete form here (as described in previous responses) -->
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
