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
                    <h1 style="text-align: center;">{{Session::get('message')}}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($brands as $brand)
                            <tr class="odd gradeX">
                                <td>{{$brand->brand_name}}</td>
                                <td>{{$brand->brand_description}}</td>
                                   <td>   
                                      @if($brand->publication_status==1)
                                         <span class="label label-success">Publish</span>
                                      @else
                                         <span class="label label-danger">Unpublish</span>
                                      @endif
                            </td>
                                <td class="center">
                                  @if($brand->publication_status==1)
                                     <a class="btn btn-info btn-xs" href="
                                       {{route('unpublish-brand',['id'=>$brand->id])}}">

                                      <span class="glyphicon glyphicon-arrow-up"></span>

                                     </a>
                                  @else
                                     <a class="btn btn-warning btn-xs" href="
                                       {{route('publish-brand',['id'=>$brand->id])}}">
                                       <span class="glyphicon glyphicon-arrow-down"></span>                              
                                     </a>
                                  @endif
                                    <a href="{{route('edit-brand',['id'=>$brand->id])}}" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-brand',['id'=>$brand->id])}}" class="btn btn-danger btn-xs">
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