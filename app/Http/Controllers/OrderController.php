<?php

namespace App\Http\Controllers;
use DB;
use PDF;
use App\Order;
use App\Customer;
use App\Payment;
use App\OrderDetails;
use App\Shipping;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manageOrderInfo()
    {
    	$orders = DB::table('orders')
    	       ->join('customers','orders.customer_id', '=', 'customers.id')
    	       ->join('payments','orders.id','=','payments.order_id')
    	         ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')
    	         ->get();


    	         return view('admin.order.manage-order',['orders'=> $orders]);
    }
    public function viewOrderDetails($id)
    {
    	$order = Order::find($id);
    	$customer = Customer::find($order->customer_id);
    	$shipping = Shipping::find($order->shipping_id);
    	$payment = Payment::where('order_id',$order->id)->first();
    	$detailsOrders = OrderDetails::where('order_id',$order->id)->get();

    	return view('admin.order.view-order',
    		[
    			'order'=>$order,
    			'customer'=>$customer,
    			'shipping'=>$shipping,
    			'payment'=>$payment,
    			'detailsOrders'=>$detailsOrders
    		]
    	);

    }
    public function viewOrderInvoice ($id)
    {
    	$order = Order::find($id);
    	$customer = Customer::find($order->customer_id);
    	$shipping = Shipping::find($order->shipping_id);
    	$payment = Payment::where('order_id',$order->id)->first();
    	$detailsOrders = OrderDetails::where('order_id',$order->id)->get();
    	return view('admin.order.view-order-invoice',

             [
    			'order'=>$order,
    			'customer'=>$customer,
    			'shipping'=>$shipping,
    			'payment'=>$payment,
    			'detailsOrders'=>$detailsOrders
    		]
    );
    }
    public function downloadInvoice($id)
    {
    	$order = Order::find($id);
    	$customer = Customer::find($order->customer_id);
    	$shipping = Shipping::find($order->shipping_id);
    	$payment = Payment::where('order_id',$order->id)->first();
    	$detailsOrders = OrderDetails::where('order_id',$order->id)->get();
    	$pdf = PDF::loadView('admin.order.download-invoice',
        [
                 'order'=>$order,
    			'customer'=>$customer,
    			'shipping'=>$shipping,
    			'payment'=>$payment,
    			'detailsOrders'=>$detailsOrders
        ]
        );
      // return $pdf->download('invoice.pdf');
        return $pdf->stream('invoice.pdf');
    }
    public function editOrder($id)
    {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id)->first();
        $detailsOrders = OrderDetails::where('order_id',$order->id)->get();
        return view('admin.order.edit-order',[
                'order'=>$order,
                'customer'=>$customer,
                'shipping'=>$shipping,
                'payment'=>$payment,
                'detailsOrders'=>$detailsOrders

                    ]);

    }
       public function updateOrder(Request $request)
    
         {
             // return $request->all();
              $order = Order::find($request->id);
              $customer = Customer::find($order->customer_id);
              $payment = Payment::where('order_id',$order->id)->first();
           $customer->first_name = $request->first_name;
           $customer->last_name = $request->last_name;

           $customer->save();

           $order->order_total  = $request->order_total;
           $order->created_at = $request->created_at;
           $order->order_status = $request->order_status;

         
           $order->save();
           $payment->payment_type = $request->payment_type;
           $payment->payment_status = $request->payment_status;
           $payment->save();
           

             return redirect()->back()->with('message','Order Update Sucessfully');

         }
     public  function deleteOrder($id)
  {
      $order = Order::find($id);
      $order->delete();

    return redirect('/manage-order')->with('message','Order info Delete Sucessfully');
   }

}
    	
