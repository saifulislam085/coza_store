@extends('admin.master')

@section('body')
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-body">
                        <h3 class="text-success text-center">Customer Info</h3>
                        <table class="table">
                            <tr>
                                <th>Customer Name</th>
                                <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Customer Number</th>
                                <td>{{$customer->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$customer->email_address}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$customer->address}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-success text-center">Shipping Info</h3>
                        <table class="table">
                            <tr>
                                <th>Full Name</th>
                                <td>{{$shipping->full_name}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$shipping->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$shipping->email_address}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$shipping->address}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-success text-center">Payment Info</h3>
                        <table class="table">
                            <tr>
                                <th>Payment Type</th>
                                <td>{{$payment->payment_type}}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{$payment->payment_status}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-body">
                        <h3 class="text-success text-center">Product Info</h3>
                        <table class="table">
                            <tr>
                                <th>Sl No.</th>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            @php($i=1)
                            @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$orderDetail->product_id}}</td>
                                <td>{{$orderDetail->product_name}}</td>
                                <td>{{$orderDetail->product_price}}</td>
                                <td>{{$orderDetail->product_quantity}}</td>
                                <td>{{$orderDetail->product_price*$orderDetail->product_quantity}}</td>

                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
