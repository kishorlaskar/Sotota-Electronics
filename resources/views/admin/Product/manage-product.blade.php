@extends('admin.master')

@section('body')

    <br/>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Products
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 style="text-align: center;">{{Session::get('message')}}</h1>
                    <div class="table-responsive">
                    <table width="100%" class="table table-striped table-bordered bootstrap-datatable datatable" id="dataTables-example">
                        <thead>
                        <tr>
                            <!-- <th>SL No</th> -->
                            <th>Catagorey Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Product Image </th>
                           
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Product size</th>
                            <th>Product Short Description </th> 
                            <th>Publication Status </th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        <!-- @php($i=1) -->
                        @foreach($products as $product)
                            <tr class="odd gradeX">
                                <td>{{$product->catagorey_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->product_name }}</td>
                                <td>
                                  <img src="{{asset($product->product_image)}}" alt="" height="100" width="100">
                                </td>
                                <td height="50" width="50">{{$product->product_price }}</td>
                              <td height="50" width="50">{{$product->product_quantity }}</td>
                                <td>{{$product->product_size }}</td>
                                <td height="50" width="50">{{$product->product_short_description }}
                                </td>
                                
                                
                                <td>   
                                      @if($product->publication_status==1)
                                         <span class="label label-success">Publish</span>
                                      @else
                                         <span class="label label-danger">Unpublish</span>
                                      @endif
                            </td>
                                <td class="center">
                           
                                  @if($product->publication_status==1)
                                     <a class="btn btn-info btn-xs" href="
                                       {{route('unpublish-product',['id'=>$product->id])}}">

                                      <span class="glyphicon glyphicon-arrow-up"></span>

                                     </a>
                                  @else
                                     <a class="btn btn-warning btn-xs" href="
                                       {{route('publish-product',['id'=>$product->id])}}">
                                       <span class="glyphicon glyphicon-arrow-down"></span>                              
                                     </a>
                                  @endif
                                    <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger btn-xs">
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
    </div>
@endsection