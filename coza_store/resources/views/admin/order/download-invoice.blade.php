<html>
<head>
<style>
    @media print {
        @page{
            size: A3;
        }
    }
    ul{
        padding: 0;
        list-style: none;
        border-bottom: 1px solid silver;
    }
    body{
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
        margin: 0;
    }
    .container{
        padding: 20px 40px;
    }
    .inv-header{
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .inv-header :nth-child(2){
        flex-basis: 30%;
    }
    .inv-title{
        padding: 10px;
        border: 1px solid silver;
        text-align: center;
        margin-bottom: 20px;
    }
    .no-margin{
        margin: 0;
    }
    .inv-logo{
        width: 150px;
    }
    .inv-header h2{
        font-size: 20px;
        margin: 1rem 0 0 0;
    }
    .inv-header ul li{
        font-size: 15px;
        padding: 3px 0;
    }

    /* table in head */
    .inv-header table{
        width: 100%;
        border-collapse: collapse;
    }
    .inv-header table th, .inv-header table td, .inv-header table{
        border: 1px solid silver;
    }
    .inv-header table th, .inv-header table td{
        text-align: right;
        padding: 8px;
    }
    /* Body */
    .inv-body{
        margin-bottom: 20px;
    }
    .inv-body table{
        width: 100%;
        border: 1px solid silver;
        border-collapse: collapse;
    }
    .inv-body table th, .inv-body table td{
        padding: 10px;
        border: 1px solid silver;
    }
    .inv-body table td h5, .inv-body table td p{
        margin: 0 5px 0 0;
    }
    /* Footer */
    .inv-footer{
        clear: both;
        overflow: auto;
    }
    .inv-footer table{
        width: 30%;
        float: right;
        border: 1px solid silver;
        border-collapse: collapse;
    }
    .inv-footer table th, .inv-footer table td{
        padding: 8px;
        text-align: right;
        border: 1px solid silver;
    }
</style>
</head>
<body>
<div class="container">
    <div class="inv-title">
        <h1 class="no-margin">Invoice # {{$order->id}}</h1>
    </div>
    <div class="inv-header">
        <div>
            <br>
            <br>
            <br>
            <br>

            <h2>{{$customer->first_name.' '.$customer->last_name}}</h2>
            <ul>
                <li>{{$customer->address}}</li>
                <li>Dhaka</li>
                <li>{{$customer->phone_number}} | {{$customer->email_address}}</li>
            </ul>
        </div>
        <div>
            <table style="width: 300px; float: right;">
                <tr>
                    <th>Issue Date</th>
                    <td>{{$order->created_at}}</td>
                </tr>
                <tr>
                    <th>Due Date</th>
                    <td>{{$shipping->created_at}}</td>
                </tr>

            </table>
        </div>
    </div>
    <div class="inv-body">
        <table>
            <thead>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            </thead>
            <tbody>
            @foreach($orderDetails as $orderDetail)
                <tr>
                    <td>
                        {{$orderDetail->product_name}}
                    </td>
                    <td>{{$orderDetail->product_quantity}}</td>
                    <td>{{$orderDetail->product_price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="inv-footer">
        <table>
            <tr>
                <th>Sub total</th>
                <td>{{$total = $orderDetail->product_price*$orderDetail->product_quantity}}</td>
            </tr>
            <tr>
                <th>Delivery Cost</th>
                <td>{{$delivery=50}}</td>
            </tr>
            <tr>
                <th>Grand total</th>
                <td>{{$total+$delivery}}</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>