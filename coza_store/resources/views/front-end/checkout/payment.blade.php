@extends('front-end.master')

@section('body')
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    {{Form::open(['route'=>'new-order','method'=>'post'])}}
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Dear {{Session::get('customerName')}},<br>
                        Please give your Payment info
                    </h4>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input type="radio" name="payment_type" value="cash"> Cash on delivery
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input type="radio" name="payment_type" value="visa"> Visa/Master Card
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input type="radio" name="payment_type" value="bkash"> Bkash
                    </div>

                    <button name="btn" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Submit Payment Info
                    </button>
                    {{Form::close()}}
                </div>


            </div>
        </div>
    </section>
@endsection