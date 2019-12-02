@extends('admin.master')

@section('body')

  <br/>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                     <h3 style="text-align: center;">{{Session::get('message')}}</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                


                        <tbody>
                        
                        <tr class="odd gradeX">
                           @php($i=1)
                        @foreach($orders as $order)
                            <tr class="odd gradeX">
                              <td>{{ $i++ }}</td>
                              <td>
                                {{$order->first_name.' '.$order->last_name}}</td>
                                <td>{{$order->order_total}} TK.</td>
                                <td>{{$order->created_at }}</td>
                                <td>{{$order->order_status }}</td>
                                <td height="50" width="50">{{$order->payment_type}}</td>
                                <td height="50" width="50">{{$order->payment_status}}</td>
                               
                                
                                <td class="center">
                                
                                     <a class="btn btn-info btn-xs" href="
                                       {{route('view-order-details',['id'=>$order->id])}}">

                                      <span class="glyphicon glyphicon-zoom-in" title="view order"></span>

                                     </a>
                                      <a class="btn btn-info btn-xs" href="{{route('view-order-invoice',['id'=>$order->id])}}">

                                      <span class="glyphicon glyphicon-zoom-out" title="view Invoice"></span>

                                     </a>
                               
                                     <a class="btn btn-primary btn-xs" href="{{route('download-order-invoice',['id'=>$order->id])}}">
                                       <span class="glyphicon glyphicon-download" title="Download Invoice"></span>                              
                                     </a>
                                 <a href="{{route('edit-order',['id'=>$order->id])}}" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                     <a href="{{route('delete-order',['id'=>$order->id])}}" class="btn btn-danger btn-xs">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                                @endforeach
                         
                        </tr>
                        
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
  @endsection