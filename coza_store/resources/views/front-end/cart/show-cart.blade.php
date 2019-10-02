@extends('front-end.master')

@section('body')
    <form class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Product</th>
                                    <th class="column-2">Name</th>
                                    <th class="column-3">Price</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                    <th>Action</th>
                                </tr>
                                @php($sum = 0)
                                @foreach($cartProducts as $cartProduct)
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <img src="{{asset($cartProduct->options->image)}}" alt="IMG">
                                        </div>
                                    </td>
                                    <td class="column-2">{{$cartProduct->name}}</td>
                                    <td class="column-3">Tk. {{$cartProduct->price}}</td>
                                    <td class="column-4">
                                        <div class="">


                                            {{Form::open(['route'=>'update-cart','method'=>'post'])}}
                                            <input type="number" name="qty" value="{{$cartProduct->qty}}" >
                                            <input type="hidden" name="rowId" value="{{$cartProduct->rowId}}">
                                            <br>
                                            <input type="submit" name="btn" value="Update">
                                            {{Form::close()}}

                                            <hr>

                                        </div>
                                    </td>
                                    <td class="column-5">Tk. {{$total = $cartProduct->price*$cartProduct->qty}}</td>

                                    <td>
                                        <a href="{{route('delete-cart-item',['rowId'=>$cartProduct->rowId])}}" >Delete</a>
                                    </td>
                                </tr>
                                    <?php $sum = $sum+$total?>
                                @endforeach


                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                    Apply coupon
                                </div>
                            </div>

                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                Update Cart
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Cart Totals
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
                            </div>

                            <div class="size-209">
								<span class="mtext-110 cl2">
									Tk. {{$sum}}
								</span>
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
                            </div>

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                    {{$shipping = 50}}
                                </p>

                                <div class="p-t-15">
									<span class="stext-112 cl8">

									</span>




                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
                            </div>

                            <div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									Tk. {{$orderTotal = $sum+$shipping}}
                                    <?php Session::put('orderTotal',$orderTotal) ?>
								</span>
                            </div>
                        </div>
                        @if(Session::get('customerId') && Session::get('shippingId'))
                            <a href="{{route('checkout-payment')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Proceed to Checkout
                            </a>
                        @elseif(Session::get('customerId'))
                            <a href="{{route('checkout-shipping')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Proceed to Checkout
                            </a>
                        @else
                            <a href="{{route('checkout')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Proceed to Checkout
                            </a>
                        @endif
                        <hr>
                        <a href="{{route('/')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection