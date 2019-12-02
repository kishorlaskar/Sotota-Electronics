@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 style="text-align: center">{{Session::get('message')}}</h1>
 {{ Form::open(['route'=>'save-brand', 'method'=>'POST', 'class'=>'form-horizontal']) }}

                   <div class="form-group">
                            <label class="control-label col-md-3 ">Brand Name</label>
                            <div class="col-md-9">
                                <input type="text" name="brand_name" class="form-control" >
                                <span class="text-danger">
                     {{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 ">Brand Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" name="brand_description" class="form-control" rows="5" style="resize: vertical" ></textarea>
                                     {{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Publication Status</label>
                                    <div class="col-md-9">
                                        <input type="radio" name="publication_status" checked value="1">Published
                                        <input type="radio" name="publication_status"  value="0">Unpublished
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-md-9 col-md-offset-3">
                                        <input type="submit" class="btn btn-success btn-block" name="btn" value="Save Brand Info">
                                    </div>

                        </div>
                       
                     


     {{ Form::close() }}
                
                </div>
            </div>
        </div>
    </div>
@endsection