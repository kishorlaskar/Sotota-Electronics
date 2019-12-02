<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Catagorey;
use App\Product;
use App\multiple_image;
use  Image;
use DB;

class ProductController extends Controller
{
    public function addProduct()
    {
    	$catagoreys = Catagorey::where('publication_status',1)->get();
    	$brands     = Brand::where('publication_status',1)->get();
    	return view('admin.Product.add-product',
    		[
    			'catagoreys' => $catagoreys,
    			'brands'     => $brands

    		]);
    }
       

    protected function productImageUpload($request)
    {
        $productImage = $request->file('product_image');
        $filetype = $productImage->getClientOriginalExtension();
        $imageName = $request->product_name.'.'.$filetype;
        $directory = 'product-images/';
        $imageUrl = $directory.$imageName;
        Image::make($productImage)->resize(200,200)->save($imageUrl);
         return $imageUrl;     


    }

    protected function productInfoValidate($request)
    {
       $this->validate($request, [
  
    'product_name' => 'required',
    'product_price'=>'required',
    'product_quantity'=>'required',
    'product_short_description'=>'required',
    'product_long_description'=>'required',
    'product_image' => 'required',
    'publication_status' =>'required'
    ]);
  
    }
    protected function saveProductInfo($request, $imageUrl)
    {
        $product= new Product();
        $product->catagorey_id = $request->catagorey_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity= $request->product_quantity;
        $product->product_size = $request->product_size;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();

        $product_id=$product->id;
        
        $subImages=$request->file('multiple_image');

         foreach ($subImages as $subImage) {
            $subImage_name=$subImage->getClientOriginalName();
            $sub_directory = ('multiple_images/');
            $multiple_imageurl = $sub_directory.$subImage_name;
        Image::make($subImage)->resize(200,200)->save($multiple_imageurl);
             
            $multiple_image = new multiple_image();
            $multiple_image->product_id =$product_id;
            $multiple_image->multiple_image=$multiple_imageurl;

            $multiple_image->save();


         }

    } 
    public function saveProduct(Request $request)
    {
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->saveProductInfo($request, $imageUrl);
        return redirect('/add-product')->with('message','Product info saved');
       
       //return 'sucess';
    	 
    }
    public function manageProduct()
    {
        $products = DB::table('products')
                  ->join('catagoreys', 'products.catagorey_id', '=', 'catagoreys.id')
                  ->join('brands', 'products.brand_id', '=', 'brands.id')
                  ->select('products.*', 'brands.brand_name', 'catagoreys.catagorey_name')
                  ->get();
                  
                  return view('admin.Product.manage-product',['products' => $products]);
    }
  
    public function editProduct($id)
    {

        $product = Product::find($id);
        $catagoreys = Catagorey::where('publication_status',1)->get();
        $brands     = Brand::where('publication_status',1)->get();
        return view('admin.Product.edit-product',[
            'product'   => $product,
            'catagoreys'=> $catagoreys,
            'brands'    =>$brands

                    ]);

    }
    public function unpublishProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();

        return redirect('/manage-product')->with('message','Product is Unpublished');

    }
      public function publishProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();

        return redirect('/manage-product')->with('message','Product is published');

    }
    public function productBasicInfoUpdate($product,$request,$imageUrl=null)
    {

        $product->catagorey_id = $request->catagorey_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity= $request->product_quantity;
        $product->product_size = $request->product_size;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        if($imageUrl)
        {
            $product->product_image =$imageUrl;
        }
       // $product->publication_status = $request->publication_status;
        $product->save();
       
    }
      public function updateProduct(Request $request)
    
    {
         $productImage = $request->file('product_image');
         $product =  Product::find($request->id);
       //  $this->productBasicInfoUpdate($product,$request,$imageUrl);
         if($productImage)
         { 
            unlink($product->product_image);

            $imageUrl = $this->productImageUpload($request);
            $this->productBasicInfoUpdate($product,$request,$imageUrl);

         }
    else
    {
        $this->productBasicInfoUpdate($product,$request);
    }
return redirect('/manage-product')->with('message','Product Update Sucessfully');
    
}
  public  function deleteProduct($id)
  {
        $product = Product::find($id);
        $multiple_images=multiple_image::where('product_id','=',$product->id)->get();
        foreach ($multiple_images as $multiple_image) {
            $image_path =public_path().'/'.$multiple_image->multiple_image;
            unlink($image_path);
            $multiple_image->delete();
        }
       unlink($product->product_image);

      $product->delete();

    return redirect('/manage-product')->with('message','Product info Delete Sucessfully');
   }

}
