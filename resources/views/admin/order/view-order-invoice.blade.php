@extends('admin.master')

@section('body')

  <br/>
           <head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding:20px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h1 style="text-shadow:transparent; font: italic;">সততা ইলেকট্রনিক্স </h1>
                            </td>
                            
                            <td>
                                Invoice #: {{$order->id}}<br>
                                Created:{{$order->created_at}}<br>
                                <br>
                                <b>Billing Info</b><br>
                                
                                {{$customer->first_name.' '.$customer->last_name}}<br>
                                {{$customer->  phone_number  }}<br>
                                {{$customer->email}}<br>
                                {{$customer->address}}
                                <br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                              <b>Address</b>
                                Shop no : 15 ,Road no: 5.<br>
                                NS Road<br>
                                Kushtia 7001
                            </td>
                            
                            <td>
                               <br>
                              <b>Shipping Info</b><br>
                                {{$shipping->full_name}}<br>
                                {{$shipping->email}}<br>
                                {{$shipping->phone_number}}<br>
                                {{$shipping->address}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Status
                </td>

            </tr>
            
            <tr class="details">
                <td>
                   {{$payment->payment_type}}
                </td>
                
                <td>
                    {{$payment->payment_status}}
                </td>
            </tr>
                 <div class="row">
        <div class="col-lg-12">
            <!-- <div class="panel panel-default"> -->
                <!-- <div class="panel-heading">
                    Product Info for This Order
                </div> -->
                <!-- /.panel-heading -->
                <div class="panel-body">
                     
                    <table width="100%" class="table table-striped table-bordered ">
                        <thead>
                        <tr class="heading">
                            
                            <th>Item</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                           
                        </tr>
                        </thead>

                


                        <tbody>
                        
                        
                        @foreach($detailsOrders as $detailsOrder)
                            <tr class="de">
                              
                              <td>{{$detailsOrder->product_name}}</td>
                              <td>Tk.{{$detailsOrder->product_price}}</td>
                              <td>{{$detailsOrder->product_quantity}}</td>
                              <td>Tk.{{$detailsOrder->product_price * $detailsOrder->product_quantity}}</td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
      </table>
    </div>

  <!--           
            <tr class="heading">
                <td>
                    Item
                </td>
                <td>Quantity</td>
                <td>
                    Price
                </td>
                
            </tr>
           @foreach($detailsOrders as $detailsOrder)
            <tr class="item">
                <td>
                   {{$detailsOrder->product_name}}
                </td>
                 <td>
                  {{$detailsOrder->product_quantity}}
                </td>
                <td>
                    Tk.{{$detailsOrder->product_price}}
                </td>
               
            </tr>
          
          
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: {{$detailsOrder->product_price * $detailsOrder->product_quantity}} TK
                </td>
            </tr>
               @endforeach -->
   
    

</body>
      @endsection