@extends('admin.master')

@section('body')

  <br/>
    <!-- /.row -->
     <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Order Details for particular order
          </div>
        <div class="panel-body">
                    <table class="table table-bordered">
                      <tr>
                     <th>Order No</th>
                     <td>{{$order->id}}</td>
                   </tr>
                   <tr>
                     <th>Order Total</th>
                     <td>{{$order->order_total}} Tk.</td>
                   </tr>
                   <tr>
                     <th>Order Status</th>
                     <td>{{$order->order_status}}</td>
                   </tr>
                   <tr>
                     <th>Order Date</th>
                     <td>{{$order->created_at}}</td>
                   </tr>
                    </table>
                </div>
            </div>
        </div>
      </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Customer Info For this order
          </div>
        <div class="panel-body">
                    <table class="table table-bordered">
                      <tr>
                     <th>Customer Name</th>
                     <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                   </tr>
                   <tr>
                     <th>Phone Number</th>
                     <td>{{$customer->  phone_number  }}</td>
                   </tr>
                   <tr>
                     <th>Email Address</th>
                     <td>{{$customer->email}}</td>
                   </tr>
                   <tr>
                     <th>Address</th>
                     <td>{{$customer->address}}</td>
                   </tr>
                    </table>
                </div>
            </div>
        </div>
      </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Shipping Info For this order
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                     <td>{{$shipping->email}}</td>
                     </tr>
                     <tr>
                     <th>Address</th>
                     <td>{{$shipping->address}}</td>
                     </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Payment Info For this Order
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                     
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <tr>
                     <th>Payment Type </th>
                     <td>{{$payment->payment_type}}</td>
                     </tr>
                     <tr>
                     <th>Payment Status</th>
                     <td>{{$payment->payment_status}}</td>
                     </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Product Info for This Order
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                     
                    <table width="100%" class="table table-striped table-bordered ">
                        <thead>
                        <tr style="background-color:black ">
                            <th>SL No.</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                           
                        </tr>
                        </thead>

                


                        <tbody>
                        
                        <tr class="odd gradeX">
                           @php($i=1)
                        @foreach($detailsOrders as $detailsOrder)
                            <tr class="odd gradeX">
                              <td>{{ $i++ }}</td>
                              <td>{{$detailsOrder->product_id}}</td>
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

  @endsection