@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <h1 style="text-align: center">{{Session::get('message')}}</h1>

                    {{ Form::open(['route'=>'update-slider','method'=>'POST', 'class'=>'form-horizontal','enctype'=>'multipart/form-data', 'name'=>'editSliderForm'])}}
                   
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Slider Image</label>
                            <div class="col-md-9">
                               <input type="file" class="form-control" name="slider_image" accept="image/*">
                               <img src="{{asset($product->product_image)}}" alt="" height="80" width="80">
                               
                            </div>
                        </div>
                         <!-- <div class="form-group">
                                    <label class="control-label col-md-3">Publication Status</label>
                                    <div class="col-md-9">
                                        <input type="radio" name="publication_status"  value="{{$product->publication_status}}">Published
                                        <input type="radio" name="publication_status"  value="{{$product->publication_status}}">Unpublished
                                    </div>
                                </div> -->
                             <!--    <div class="form-group">
                                </div> -->

                        <div class="form-group">

                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" class="btn btn-success btn-block" name="btn" value="Update Slider Info">
                            </div>
                        </div>
             {{Form::close() }}
         </div>
        </div>
    </div>
    </div>
    </div>
 
@endsection