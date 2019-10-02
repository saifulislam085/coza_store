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
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($products as $product)
                                @if(Auth::user()->role == 'admin')
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->category_name}}</td>
                                        <td>{{$product->brand_name}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td>{{$product->product_quantity}}</td>
                                        <td>
                                            <img src="{{asset($product->product_image)}}">
                                        </td>
                                        <td>{{$product -> publication_status == 1? 'Published' : 'Unpublished'}}</td>
                                    </tr>
                                @elseif($product->user_id == Auth::user()->id)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->category_name}}</td>
                                        <td>{{$product->brand_name}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td>{{$product->product_quantity}}</td>
                                        <td>
                                            <img src="{{asset($product->product_image)}}">
                                        </td>
                                        <td>{{$product -> publication_status == 1? 'Published' : 'Unpublished'}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection