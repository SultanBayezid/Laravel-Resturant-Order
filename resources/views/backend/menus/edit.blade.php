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
          <a href="#">Menu Items</a>
          </li>
          <li>
            <span class="divider">  | </span>
          </li>
          <li>
        {{$menu->name}}
          </li>
    </ul>
</div>
<!-- breadcrumb -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Menu Item</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
             <div class="card-body">
             <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $menu->name) }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{ old('description', $menu->description) }}</textarea>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $menu->price) }}" required>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="is_vegetarian" name="is_vegetarian" value="1" @if($menu->is_vegetarian) checked @endif>
        <label class="form-check-label" for="is_vegetarian">Is Vegetarian</label>
    </div>

    <div class="form-group">
        <label for="calories">Calories</label>
        <input type="number" class="form-control" id="calories" name="calories" value="{{ old('calories', $menu->calories) }}">
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" id="category_id" name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if($category->id === $menu->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="is_available" name="is_available" value="1" @if($menu->is_available) checked @endif>
        <label class="form-check-label" for="is_available">Is Available</label>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
             </div>

            </div>
            <!-- /.card -->

   
   

          </div>
 
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
    function updateFileName(input) {
        var fileName = input.files[0].name;
        var label = input.parentElement.querySelector('.custom-file-label');
        label.textContent = fileName;
    }
</script>
@endsection
