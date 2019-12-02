@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 style="text-align: center;">{{Session::get('message')}}</h1>
                   
                    <form action="{{route('update-catagorey')}}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Catagorey Name</label>
                            <div class="col-md-9">
                                <input type="text" name="catagorey_name" class="form-control" value="{{$catagorey->catagorey_name}}" >
                                <input type="hidden" name="id" class="form-control" value="{{$catagorey->id}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Catagorey Description
                            </label>
                            <div class="col-md-9">
                               <input type="text" class="form-control" name="   catagorey_description" value="{{$catagorey->catagorey_description}}" style="padding: 50px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <input type="radio" name="publication_status" checked value="{{ $catagorey->publication_status}}">Published
                                <input type="radio" name="publication_status"  value="{{ $catagorey->publication_status}}">Unpublished
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" class="btn btn-success btn-block" name="btn" value="update Catagorey Info">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection