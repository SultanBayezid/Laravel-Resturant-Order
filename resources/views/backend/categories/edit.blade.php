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
          <a href="#">Menu Category</a>
          </li>
          <li>
            <span class="divider">  | </span>
          </li>
          <li>
          {{ $category->name }}
          </li>
    </ul>
</div>
<!-- breadcrumb -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Category</h1>
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
              <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                    <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                  </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                    <label for="name">Category Order</label>
                    <input type="number" class="form-control" id="order_id" name="order_id" value="{{ $category->order_id }}">
                  </div>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="image">Category Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="image" onchange="updateFileName(this)">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
             

                      @if ($category->image)
                      <div class="form-group">
                              <label>Current Image:</label>
                              <img src="{{ url('uploads/' . $category->image) }}" alt="Category Image" width="100">
                          </div>
   
@else
    <img alt="Default Image" class="table-avatar" src="{{ asset('backend/dist/img/noimage.jpg') }}" style="max-width:100px">
@endif

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
