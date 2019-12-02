<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagorey;
use App\Product;
use App\Brand;
use App\Slider;
use App\multiple_image;
use App\Review;
use DB;

class NewShopController extends Controller
{
    public function index(Request $request)
    {
        // return $request->all();
    	//$catagoreys = Catagorey::where('publication_status',1)->get();
        
            $brands = Brand::where('publication_status',1)->get();
            $sliders = Slider::where('status',1)->get();
            $searchData =  $request->SearchData;

    $newproducts = DB::table('catagoreys')
     ->join('products', 'products.catagorey_id','catagoreys.id')
    ->where('products.product_name','LIKE', "%$searchData%")
    ->where('products.publication_status',1)
  
                     ->orderBy ('products.id','DESC')
                     // ->skip(2)
                     ->take(12)
                     ->get();
            
             return view('front-end.home.home',[
         	
         	'newproducts' =>$newproducts,
            'brands' =>$brands,
            'sliders'=>$sliders,
         
            'searchData' => $searchData
            

         ]);
    }
     public function catagoreyProduct($id)
    {
    	$catagoreyProducts =Product::where('catagorey_id',$id)
    	         ->where('publication_status',1)
    	         ->get();
    	$catagoreys = Catagorey::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
         return view('front-end.catagorey.catagorey',
         	[
         		'catagoreyProducts'=>$catagoreyProducts,
                'catagoreys' =>$catagoreys,
                 'brands' =>$brands
         	]
         );
    }
    public function brandProduct($id)
    {
           $brandProducts = Product::where('brand_id',$id)
                          ->where('publication_status',1)
                          ->get();
                          $brands = Brand::where('publication_status',1)->get();
                          $catagoreys = Catagorey::where('publication_status',1)->get();
                          return view('front-end.brands.brand',
            [
                'brandProducts'=>$brandProducts,
                'brands' =>$brands,
                'catagoreys' =>$catagoreys

            ]);

    }
    public function productDetails($id)
    {
      $nextproducts = DB::table('catagoreys')
      ->join('products', 'products.catagorey_id','catagoreys.id')
    ->where('products.publication_status',1)
  
                     ->orderBy ('products.id','ASE')
                     
                     ->take(4)
                     ->get();

    $product=Product::find($id);
     $brands = Brand::where('publication_status',1)->get();
    $catagoreys = Catagorey::where('publication_status',1)->get();
    $multiple_images = multiple_image::where('product_id',$id)->get();
    // $reviews = Review::find($review_id);
    return view('front-end.product.product-details',
        [
          'nextproducts' =>$nextproducts,
            'product'=>$product,
            'brands' =>$brands,
                'catagoreys' =>$catagoreys,
                'multiple_images' => $multiple_images,
                //
        ]
);
    }
    public function rule()
    {

      $brands = Brand::where('publication_status',1)->get();
      return view('front-end.includess.rules',

        [
          'brands' =>$brands
        ]
      );
    }
    public function review(Request $request)
    {

       $reviews = new Review; 
       $reviews->name = $request->name;
       $reviews->review = $request->review;
       $reviews->address = $request->address;
       $reviews->save();
       return redirect()->back()->with('message','Review Send Sucessfully');
    }
   //     public function searchProduct(Request $request)
   // {
     
   //       return view('front-end.',
   //          [
   //              'data' => $data,
   //              // 'catagoreys' => $catagoreys,
   //              'searchData' =>$searchData
   //          ]
   //      );
   // }

}
