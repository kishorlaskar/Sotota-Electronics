@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <h1 style="text-align: center">{{Session::get('message')}}</h1>

                    {{ Form::open(['route'=>'update-order','method'=>'POST', 'class'=>'form-horizontal', 'name'=>'editOrderForm'])}}

                    <div class="form-group">
                            <label class="control-label col-md-3 ">Customer First Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$customer->first_name}}" name="first_name" class="form-control">
                                 <input type="hidden" value="{{$order->id}}" name="id" class="form-control">
                            </div>
                            </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 ">Customer Last Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$customer->	last_name}}" name="last_name" class="form-control">
                               <!--   <input type="hidden" value="{{$order->id}}" name="id" class="form-control"> -->
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Order Total </label>
                            <div class="col-md-9">
                                <input type="number" value="{{$order->order_total}}" name="order_total" class="form-control">
                                 
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Order Date</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$order->created_at}}" name="created_at" class="form-control">
                             
                            </div>
                            </div>
                               <div class="form-group">
                            <label class="control-label col-md-3 ">Order Status</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$order->order_status}}" name="order_status" class="form-control">
                             
                            </div>
                            </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 ">Payment Type</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$payment->payment_type}}" name="payment_type" class="form-control">
                                 
                            </div>
                            </div>

                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Payment Status</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$payment->payment_status}}" name="payment_status" class="form-control">
                                 
                            </div>
                            </div>
                             <div class="form-group">

                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" class="btn btn-success btn-block" name="btn" value="update Order Info">
                            </div>
                        </div>
                       {{Form::close() }}

@endsection                            
