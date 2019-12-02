@extends('admin.master')

@section('body')
 <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <h1 style="text-align: center;">{{Session::get('message')}}</h1>
                     <h3 style="text-align:center;">Add Slider</h3>
                    {{ Form::open(['route'=>'save-slider','method'=>'POST', 'class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}

                        <div class="form-group">
                            <label class="control-label col-md-3 ">Slider  Image</label>
                            <div class="col-md-9">
                               <input type="file" class="form-control" name="slider_image" accept="image/*">
                               {{ $errors->has('slider_image') ? $errors->first('slider_image') : ' ' }}</span>
                            </div>
                        </div>
                         <div class="form-group">
                                    <label class="control-label col-md-3">Publication Status</label>
                                    <div class="col-md-9">
                                        <input type="radio" name="status"  value="1">Published
                                        <input type="radio" name="status"  value="0">Unpublished
                                    </div>
                                </div>

                        <div class="form-group">

                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" class="btn btn-danger btn-block" name="btn" value="Save Slider  Info">
                            </div>
                        </div>

                    {{Form::close() }}
                </div>
            </div>
        </div>
    </div>





@endsection