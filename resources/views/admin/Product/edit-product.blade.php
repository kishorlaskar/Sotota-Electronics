@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <h1 style="text-align: center">{{Session::get('message')}}</h1>

                    {{ Form::open(['route'=>'update-product','method'=>'POST', 'class'=>'form-horizontal','enctype'=>'multipart/form-data', 'name'=>'editProductForm'])}}
                   
                            <div class="form-group">
                            <label class="control-label col-md-3 ">Catagorey Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="catagorey_id">
                                    <option>---Select Catagorey---</option>
                                    @foreach($catagoreys as  $catagorey)
                                        <option value="{{$catagorey->id}}">
                                            {{$catagorey->catagorey_name}}
                                        </option>
                                    @endforeach
                                </select>
                                 
                            </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="brand_id">
                                    <option>---Select Brand---</option>
                                    @foreach($brands as  $brand)
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                </select>
                                 
                            </div>
                            </div>
                      
                            <div class="form-group">
                            <label class="control-label col-md-3 ">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$product->product_name}}" name="product_name" class="form-control">
                                 <input type="hidden" value="{{$product->id}}" name="id" class="form-control">
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Price</label>
                            <div class="col-md-9">
                                <input type="number" value="{{$product->product_price}}" name="product_price" class="form-control">
                                 
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Quantity</label>
                            <div class="col-md-9">
                                <input type="number" value="{{$product->product_quantity}}" name="product_quantity" class="form-control">
                             
                            </div>
                            </div>
                                    <div class="form-group">
                            <label class="control-label col-md-3 ">Product Size</label>
                            <div class="col-md-9">
                                <input type="number" value="{{$product->product_size}}" name="product_size" class="form-control">
                                 
                            </div>
                            </div>

                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Short Description</label>
                            <div class="col-md-9">
                                <textarea  value="
                                " name="   product_short_description" class="form-control" rows="4" style="resize: vertical">{{$product->product_short_description}}</textarea>
                                 
                            </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Long Description</label>
                            <div class="col-md-9">
                                <textarea id="editor" name="product_long_description" class="form-control" rows="6" style="resize: vertical">{{$product->  product_long_description}}</textarea>
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Image</label>
                            <div class="col-md-9">
                               <input type="file" class="form-control" name="product_image" accept="image/*">
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
                                <input type="submit" class="btn btn-success btn-block" name="btn" value="Update Product Info">
                            </div>
                        </div>
             {{Form::close() }}
         </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        document.forms['editProductForm'].elements['catagorey_id'].value='{{$product->catagorey_id}}';
        document.forms['editProductForm'].elements['brand_id'].value='{{$product->brand_id}}';
    </script>
@endsection