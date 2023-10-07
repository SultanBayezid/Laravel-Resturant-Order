@extends('layouts.frontend')

@section('content')
       <!-- Page Title -->


        <!-- Page Content -->
        <div class="page-content pt-0 pull-up-30 protrude">
            <div class="container">
            <div class="row p-5">
     
     <div class="col-xl-3 col-lg-3">
     @include('frontend.user.menu')




     </div>
     <div class="col-xl-9 col-lg-9">
    <!-- My Profile Section -->
    <form>
        <h4 class="border-bottom pb-4"><i class="ti ti-star mr-3 text-primary"></i>Review</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Review</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td><i class="ti ti-star"></i></td>
                    <td>5 stars</td>
                    <td>This is my first review.</td>
                    <td>
                        <button class="btn btn-link btn-sm">Edit</button>
                        <button class="btn btn-link btn-sm">Delete</button>

                    </td>
                </tr>
                <tr>
                    <td><i class="ti ti-star"></i></td>
                    <td>5 stars</td>
                    <td>This is my first review.</td>
                    <td>
                    <button class="btn btn-link btn-sm">Edit</button>
                        <button class="btn btn-link btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows for additional orders -->
            </tbody>
        </table>
      
    </form>




</div>


 
            </div>
        </div>

        <!-- Section -->
    

   
   
</div>
@endsection