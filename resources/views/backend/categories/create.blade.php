@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Category</h1>
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
              <form action="{{route('categories.store')}}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                    <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
                  </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                    <label for="name">Category Order</label>
                    <input type="number" class="form-control" id="order_id" name="order_id" placeholder="Order">
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
