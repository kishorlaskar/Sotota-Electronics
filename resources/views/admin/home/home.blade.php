@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                          @php
                          $catagorey = DB::table('catagoreys')
                           ->count('id')


                  @endphp
                        <div class="col-xs-9 text-right">

                            <div class="huge">
                             {{$catagorey}}
                            </div>
                            <div>All Catagories</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                  
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                           @php
                          $product = DB::table('products')
                           ->count('id')


                  @endphp
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$product}}</div>
                            <div>All Products</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                        
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                         @php
                          $customer = DB::table('customers')
                           ->count('id')


                  @endphp
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$customer}}</div>
                            <div>Total Customers</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                        
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                         @php
                          $brand = DB::table('brands')
                           ->count('id')


                  @endphp
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$brand}}</div>
                            <div>All Brands</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                      
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                         @php
                          $order = DB::table('orders')
                           ->count('id')


                  @endphp
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$order}}</div>
                            <div>All Orders</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                        
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
               
               <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                      
                        <div class="col-xs-9 text-right">
                            <div class="huge">120000</div>
                            <div> Tk. Total Earnings</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left"></span>
                        
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
               

    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
           
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-table-o fa-fw"></i> Sale Product Info
                
                </div>
              
                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Transiction No</th>
                                        <th>Order Date</th>
                                        <th>Product</th>
                                        <th>Amount</th>
                                        <th>Payment Type</th>
                                        <th>Payment Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                @php($i=1)
                                @if(count($saleProducts)>0)
                                @foreach($saleProducts as $saleProduct )
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$saleProduct->created_at}}</td>
                                        <td>{{$saleProduct->product_name}}</td>
                                        <td>{{$saleProduct->product_price}}</td>
                                        <td>{{$saleProduct->payment_type}}</td>
                                        <td>{{$saleProduct->payment_status}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                       
                    </div>
                    
                </div>
                
            </div>
          
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Reviews
                </div>
               
                <div class="panel-body">
                    <ul class="timeline">
                        @foreach($reviews as $review)
                        <li>

                            <div class="timeline-badge"><i class="fa fa-check"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">
                                        {{$review->name}}
                                    </h4>
                                    
                                </div>
                                 <div class="timeline-body">
                                    <p>{{$review->address}}</p>
                                    <p>{{$review->review}}</p>
                             
                                </div>
                            </div>
                        </li>
                        @endforeach

                        
                        
                    </ul>
                </div>
                
            </div>
        
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Notifications Panel
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                            <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-warning fa-fw"></i> Server Not Responding
                            <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                            <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-money fa-fw"></i> Payment Received
                            <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                    <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
   
            <!-- /.panel -->
            <div class="chat-panel panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i> Chat
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li>
                                <a href="#">
                                    <i class="fa fa-refresh fa-fw"></i> Refresh
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-check-circle fa-fw"></i> Available
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-times fa-fw"></i> Busy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-clock-o fa-fw"></i> Away
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                    </small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.panel-body -->
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                    </div>
                </div>
                <!-- /.panel-footer -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
           
            
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <i class="fa fa-bar-table-o fa-fw"></i> Rules & Regulation of 
                
                </div>
              
                <div class="panel-body">
                    <table class="table-bordered">
                        <tbody>
                            <tr>
                                <td>1.Ensure Best Quality of Products.</td>
                            </tr>
                            <tr>
                                <td>2.Always be honest at your work.</td>
                            </tr>
                            <tr>
                                <td>
                                    3.Answer Any Query from customer
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4.Is there any mistaken happens in product catagorizitaion then on duty admin will response for that guilty.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5.For maintain site call the devloper.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<div class="col-lg-4">
<div class="panel panel-danger">
    <div class="panel-heading">
        Devlopers Information
    </div>
    <div class="panel-body">
        <table>
            <tbody>
                <tr>
                    <td style="text-align: center;">
                       <img src="{{asset('/')}}admin/images/pic.jpg" height="80" width="
                       100" alt="kishor"> 
                    </td>
                </tr>
                <tr>
                    <td>Name: Kishor Laskar</td>
                </tr>
                <tr>
                    <td>Phone: 01768-685475</td>
                </tr>
                <tr>
                    <td>Email: rkdiu95@gmail.com</td>
                </tr>
            </tbody>
        </table>

    </div>

    </div>

</div>

@endsection