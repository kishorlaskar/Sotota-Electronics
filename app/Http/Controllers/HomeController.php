<?php

namespace App\Http\Controllers;
use DB;
use App\Order;
use App\Payment;
use App\OrderDetails;
use App\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               
                  $saleProducts = DB::table('order_details')

                  ->join('orders', 'order_details.order_id', '=', 'orders.id')
                  ->join('payments','order_details.payment_id', '=', 'payments.id')
                  ->select('order_details.product_name','order_details.product_price', 'orders.created_at', 'payments.payment_type','payments.payment_status')
                  ->get();

                $reviews = DB::table('reviews')
                   ->select('reviews.review','reviews.name','reviews.address')
                   ->get();
                
                  
                  return view('admin.home.home',
                    [
                      'saleProducts' => $saleProducts,
                      'reviews'=>$reviews
                      
                  ]);
    }

    
}
