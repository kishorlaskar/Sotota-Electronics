<html>

<head>
    <meta charset="utf-8">
    <title>Sotota Electronics</title>
    
    <style>

   table {
  border-collapse: collapse;
  width: 100%;
  font-size: 10;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </style>
</head>

<body>
    <h1 style="text-align: center; font-family: inherit;">SOTOTA ELECTRONICS</h1>
<p style="text-align: center;">
    <b>Address:</b>  Shop no : 15 ,Road no: 5.
    NS Road
    Kushtia 7001.
<br>
<br>
Invoice No #: {{$order->id}}<br>
Created at:   {{$order->created_at}}

</p>
<div class="col-lg-12">
    <div class="row">

    </div>
<table class="table-bordered">

            <tr class="top">
                <td colspan="2">
                    <table style="  border: 1px solid black;
  border-collapse: collapse;">
                        <tr>
                         
                            
                            <td>
                               
                                <b>Billing Info</b><br>
                                
                                {{$customer->first_name.' '.$customer->last_name}}<br>
                                {{$customer->  phone_number  }}<br>
                                {{$customer->email}}<br>
                                {{$customer->address}}
                                <br>
                            </td>
                            <td>
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
            
<!--             <tr class="information">
                <td colspan="2">
                    <table>

                        <tr>
                           
                            
                            <td>
                               
                            
                            </td>
                        </tr>
                    </table>
                </td>
            </tr> -->
           
            <tr style="  border: 1px solid black;
  border-collapse: collapse;">


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
            <div class="panel panel-default">
                 <div class="panel-heading" style="text-align: center;">
                    
                </div>
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
</div>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <table>
        <tr>
            <td>
                
            </td>
            <td>
                
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <td>
                Signature of SE
            </td>
            <td>
                
            </td>
             <td>
                
            </td>
             <td>
                
            </td>
             <td>
                
            </td>
             <td>
                
            </td>
             <td>
                
            </td>
             <td>
                
            </td>
            <td>
                Signature of Shipping Customer
            </td>
        </tr>

    </table>
</div>
             <!--        </table>
                </div>
            </div>
        </div>
      </table>
    </div> --> 

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
</html>
   <!--  <div>
        
</body>
     </html>