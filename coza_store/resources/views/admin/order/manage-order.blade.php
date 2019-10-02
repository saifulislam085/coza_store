@extends('admin.master')

@section('body')
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-body">
                        <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                        <table class="table">
                            <tr>
                                <th>Sl No.</th>
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($orders as $order)
                                <tr>
                                    <th>{{$i++}}</th>
                                    <td>{{$order->first_name.' '.$order->last_name}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>
                                        <a href="{{route('view-order-details',['id'=>$order->id])}}" class="btn btn-info" title="View Order Details">
                                            <span class=""><i class="fas fa-long-arrow-alt-up" ></i></span>
                                        </a>
                                        <a href="{{route('view-order-invoice',['id'=>$order->id])}}" class="btn btn-warning" title="View Order Invoice">
                                            <span class=""><i class="fas fa-long-arrow-alt-up"></i></span>
                                        </a>
                                        <a href="{{route('download-invoice',['id'=>$order->id])}}" class="btn btn-primary" title="Download Order Invoice">
                                            <span class=""><i class="fas fa-long-arrow-alt-up"></i></span>
                                        </a>
                                        <a href="" class="btn btn-success" title="Edit">
                                            <span class=""><i class="fas fa-long-arrow-alt-up"></i></span>
                                        </a>
                                        <a href="" class="btn btn-danger" title="Delete">
                                            <span class=""><i class="fas fa-long-arrow-alt-up"></i></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection