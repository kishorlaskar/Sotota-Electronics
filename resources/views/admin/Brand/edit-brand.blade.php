@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 style="text-align: center">{{Session::get('message')}}</h1>
                    <form action="{{route('update-brand')}}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Brand Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$brand->brand_name}}" name="brand_name" class="form-control" >
                                <input type="hidden" value="{{$brand->id}}" name="id" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Brand Description</label>
                            <div class="col-md-9">
                                <input type="text" name="brand_description" class="form-control"value="{{$brand->brand_description}}" style="padding: 50px" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <input type="radio" name="publication_status" checked value="{{ $brand->publication_status}}">Published
                                <input type="radio" name="publication_status"  value="{{ $brand->publication_status}}">Unpublished
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" class="btn btn-success btn-block" name="btn" value="Update Brand Info">
                            </div>
                        </div>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection