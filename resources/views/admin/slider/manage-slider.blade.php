@extends('admin.master')

@section('body')

    <br/>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   All Slider Info
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 style="text-align: center;">{{Session::get('message')}}</h1>
                    <div class="table-responsive">
                    <table width="100%" class="table table-striped table-bordered bootstrap-datatable datatable" id="dataTables-example">
                        <thead>
                        <tr>
                            <!-- <th>SL No</th> -->
                  <th>Slider ID</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Actions</th>

                        </tr>
                        </thead>

                        <tbody>
                        <!-- @php($i=1) -->
                        @foreach($sliders as $slider)
                            <tr class="odd gradeX">
                                <td>{{$slider-> id}}</td>
                                <td>
                                  <img src="{{ asset($slider->slider_image)}}" alt="" height="100" width="100">
                                </td>
                                <td>   
                                      @if($slider->status==1)
                                         <span class="label label-success">Publish</span>
                                      @else
                                         <span class="label label-danger">Unpublish</span>
                                      @endif
                            </td>
                                <td class="center">
                           
                                  @if($slider->status==1)
                                     <a class="btn btn-info btn-xs" href="
                                       {{route('unpublish-slider',['id'=>$slider->id])}}">

                                      <span class="glyphicon glyphicon-arrow-up"></span>

                                     </a>
                                  @else
                                     <a class="btn btn-warning btn-xs" href="
                                       {{route('publish-slider',['id'=>$slider->id])}}">
                                       <span class="glyphicon glyphicon-arrow-down"></span>                              
                                     </a>
                                  @endif
                                    <a href="{{route('edit-slider',['id'=>$slider->id])}}" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-slider',['id'=>$slider->id])}}" class="btn btn-danger btn-xs">
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