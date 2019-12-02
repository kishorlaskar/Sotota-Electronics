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
                            <th>Catagorey Name</th>
                            <th>Catagorey Details</th>
                            <th>Publication Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                


                        <tbody>
                        @foreach($catagoreys as $catagorey)
                        <tr class="odd gradeX">
                            <td>{{$catagorey->catagorey_name}}</td>
                            <td>{{$catagorey->catagorey_description}}</td>
                            <td>   
                             @if($catagorey->publication_status==1)
                             <span class="label label-success">Publish</span>
                            @else
                             <span class="label label-danger">Unpublish</span>
                            @endif
                            </td>
                            <td class="center">
                             @if($catagorey->publication_status==1)
                             <a class="btn btn-info btn-xs" href="
                             {{route('unpublish-catagorey',['id'=>$catagorey->id])}}">

                             <span class="glyphicon glyphicon-arrow-up"></span>

                             </a>
                            @else
                              <a class="btn btn-warning btn-xs" href="
                              {{route('publish-catagorey',['id'=>$catagorey->id])}}">
                              <span class="glyphicon glyphicon-arrow-down"></span>                              
                             </a>
                             @endif
                                <a href="{{route('edit-catagorey',['id'=>$catagorey->id])}}" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{route('delete-catagorey',['id'=>$catagorey->id])}}" class="btn btn-danger btn-xs">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                          @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
  @endsection