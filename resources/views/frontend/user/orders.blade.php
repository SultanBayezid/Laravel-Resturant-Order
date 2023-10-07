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
    <h4 class="border-bottom pb-4"><i class="ti ti-file mr-3 text-primary"></i>Order History</h4>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order Date</th>
                    <th>Order ID</th>
                    <th>Restaurant</th>
                    <th>Total</th>
                    <th>Status</th>
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
                                $statusClass = 'text-muted';   // Default class for an unknown status
                        }
                        @endphp
                        <span class="{{$statusClass}}">{{$order->status}}</span>
                    </td>
                </tr>
                @endforeach

                <!-- Add more rows for additional orders -->
            </tbody>
        </table>
    </div>
</form>





</div>


 
            </div>
        </div>

        <!-- Section -->
    

   
   
</div>
@endsection