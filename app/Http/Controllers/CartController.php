<?php

namespace App\Http\Controllers;
use App\Product;
use App\Brand;
use Cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
    //return $request->all();
       $product = Product::find($request->id);
       
       Cart::add(
       	[
       		'id' =>   $request->id,
       		'name'=>  $product->product_name,
       		'price'=> $product->product_price,
       		'qty'  => $request->qty,
       		 'options' => 
       		 [
       		 	'image'=>$product->product_image,
       		 	
                

       		]
       	]
       );

       return redirect('/show-cart');

    }
    public function showCart()
    {   $cartproducts = Cart::content();
      $brands = Brand::where('publication_status',1)->get();
    	//return $cartproducts;
    	return view('front-end.cart.show-cart',
        ['cartproducts'=>$cartproducts,
         'brands' =>$brands
        ]);
    }
    public function updateCart(Request $request)
    {
          Cart::update($request->rowId,$request->qty);
          return redirect('/show-cart');
    }
    public function deleteCart($id)
    {
       Cart::remove($id);
       return redirect('/show-cart');
    }
}
