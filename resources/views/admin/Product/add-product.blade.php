@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 style="text-align: center;">{{Session::get('message')}}</h1>
                   
                    {{ Form::open(['route'=>'save-product','method'=>'POST', 'class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Catagorey Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="catagorey_id">
                                    <option>---Select Catagorey---</option>
                                    @foreach($catagoreys as  $catagorey)
                                        <option value="{{$catagorey->id}}">{{$catagorey->catagorey_name}}</option>
                                    @endforeach
                                </select>
                                 <span class="text-danger">
                     {{ $errors->has('catagorey_name') ? $errors->first('catagorey_name') : ' ' }}</span>
                            </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="brand_id">
                                    <option>---Select Brand---</option>
                                    @foreach($brands as  $brand)
                                    <option value="{{$brand->id}}">{{$brand ->brand_name}}</option>
                                        @endforeach
                                </select>
                                 <span class="text-danger">
                     {{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                            </div>
                      

                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" value="" name="product_name" class="form-control">
                                 <span class="text-danger">
                     {{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Price</label>
                            <div class="col-md-9">
                                <input type="number" value="" name="product_price" class="form-control">
                                 <span class="text-danger">
                     {{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Quantity</label>
                            <div class="col-md-9">
                                <input type="number" value="" name="product_quantity" class="form-control">
                                 <span class="text-danger">
                     {{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                            </div>
                            </div>
                                    <div class="form-group">
                            <label class="control-label col-md-3 ">Product Size</label>
                            <div class="col-md-9">
                                <input type="number" value="" name="product_size" class="form-control">
                                 <span class="text-danger">
                     {{ $errors->has('product_size') ? $errors->first('product_size') : ' ' }}</span>
                            </div>
                            </div>

                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Short Description</label>
                            <div class="col-md-9">
                                <textarea  value="" name="product_short_description" class="form-control" rows="4" style="resize: vertical"></textarea>
                                 <span class="text-danger">
                     {{ $errors->has('product_short_description') ? $errors->first('product_short_description') : ' ' }}</span>
                            </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Long Description</label>
                            <div class="col-md-9">
                                <textarea  value="" id="editor" name="product_long_description" class="form-control" rows="6" style="resize: vertical"></textarea>
                                {{ $errors->has('product_long_description') ? $errors->first('product_long_description') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Image</label>
                            <div class="col-md-9">
                               <input type="file" class="form-control" name="product_image" accept="image/*">
                               {{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 ">Sub Image</label>
                            <div class="col-md-9">
                               <input type="file" class="form-control" name="multiple_image[]" multiple accept="image/*">
                               {{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
                            </div>
                        </div>
                         <div class="form-group">
                                    <label class="control-label col-md-3">Publication Status</label>
                                    <div class="col-md-9">
                                        <input type="radio" name="publication_status"  value="1">Published
                                        <input type="radio" name="publication_status"  value="0">Unpublished
                                    </div>
                                </div>

                        <div class="form-group">

                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" class="btn btn-danger btn-block" name="btn" value="Save product Info">
                            </div>
                        </div>

                    {{Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection