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
            Orders
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
            <h1>Orders List</h1>
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
                    <th>Order Date</th>
                    <th>Order ID</th>
                    <th>Restaurant</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                <td>{{$order->created_at->format('d F Y')}}</td>
                    <td>{{$order->id}}</td>
                    <td>Bombay Spice</td>
            <td>${{number_format($order->total_price, 2)}}</td>
            <td>
                @php
                $statusClass = '';
                switch ($order->status) {
                    case 'pending':
                        $statusClass = 'text-warning'; // CSS class for pending status
                        break;
                    case 'confirmed':
                        $statusClass = 'text-success'; // CSS class for confirmed status
                        break;
                    case 'preparing':
                        $statusClass = 'text-info';    // CSS class for preparing status
                        break;
                    case 'out_for_delivery':
                        $statusClass = 'text-primary'; // CSS class for out_for_delivery status
                        break;
                    case 'delivered':
                        $statusClass = 'text-success'; // CSS class for delivered status
                        break;
                    default:
                        $statusClass = 'text-muted';   // Default class for unknown status
                }
                @endphp
                <span class="{{$statusClass}}">{{$order->status}}</span>
            </td>
            <td>
                      <div class="btn-group">
                        <a href="{{ route('categories.edit', $order->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('categories.destroy', $order->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
               
                <!-- Add more rows for additional orders -->
            </tbody>
        </table>
                </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
