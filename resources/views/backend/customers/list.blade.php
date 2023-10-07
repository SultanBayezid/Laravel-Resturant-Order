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
          Customer List
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
            <h1>Customer List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           <a href="{{route('customers.create')}}" class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i> Add New</a>
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
             
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($customers as $key => $customer)
                    <tr>
                    <td width="10%">{{$key +1}}</td>
                    <td width="30%">{{$customer->first_name}} {{$customer->last_name}}</td>
                    <td width="30%">{{$customer->email}}</td>
                    <td width="30%">{{$customer->mobile}}</td>
                    
 
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
