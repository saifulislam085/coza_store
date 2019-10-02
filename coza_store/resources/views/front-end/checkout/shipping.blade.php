@extends('front-end.master')

@section('body')
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    {{Form::open(['route'=>'new-shipping','method'=>'post'])}}
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Dear {{Session::get('customerName')}},<br>
                        Please give your shipping info
                    </h4>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="full_name" value="{{$customer->first_name.' '.$customer->last_name}}" placeholder="Your Full Name" required>
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email_address" value="{{$customer->email_address}}" placeholder="Your Last Name" required>
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone_number" value="{{$customer->phone_number}}" placeholder="Your Email Address" required>
                    </div>

                    <div class="bor8 m-b-30">
                        <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="address" placeholder="Enter your address here">{{$customer->address}}</textarea>
                    </div>

                    <button name="btn" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Submit Shipping Info
                    </button>
                    {{Form::close()}}
                </div>


            </div>
        </div>
    </section>
@endsection