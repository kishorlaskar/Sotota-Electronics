<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetails ;
use App\Brand;
use Cart;
use Mail;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
    	//return view('front-end.checkout.checkout-index');
        $brands = Brand::where('publication_status',1)->get();
        return view('front-end.view-checkout',['brands' =>$brands]);
    }
    public function customerSignUp(Request $request)
    {
        $this->validate($request,[
            'email' => 'email|unique:customers|email'
        ]);
    	$customer = new Customer();
    	$customer->first_name = $request->first_name;
    	$customer->last_name = $request->last_name;
    	$customer->email = $request->email;
    	$customer->password =bcrypt($request->password);
    	$customer->phone_number = $request->phone_number;
    	$customer->address = $request->address;
    	$customer->save();

    	$customerId= $customer->id;
    	Session::put('customerId',$customerId);
    	Session::put('customerName',$customer->first_name.''.$customer->last_name);
       $data = $customer->toArray();
    	Mail::send('front-end.mails.confirmation-mail',$data, function($message) use($data)
    		{
    			$message->to($data['email']);
    			$message->subject('confirmation mail');
    		}
    	);
    	
    	return Redirect('/checkout-shipping');

    }
    public function customerLoginCheck(Request $request)
    {
    $customer = Customer::where('email',$request->email)->first();
    if(password_verify($request->password, $customer->password))
    {
        Session::put('customerId',$customer->id);
        Session::put('customerName',$customer->first_name.''.$customer->last_name);

        return redirect('/checkout-shipping');
    }
    else
    {
        return redirect('/view-checkout')->with('message','Invalid email or password');
    }
    }
    public function customerLogout()
    {
        Session::forget('customerId');
        Session::forget('customerName');

        return redirect('/');

    }
    public function newCustomerLogin()
    {
        $brands = Brand::where('publication_status',1)->get();
        return view('front-end.customer.customer-login',
            [
                'brands' =>$brands
            ]
        );
    }
    public function shippingForm()
    {   $customer = Customer::find(Session::get('customerId'));
        $brands = Brand::where('publication_status',1)->get();
    return view('front-end.checkout.checkout-shipping',
        [
            'customer'=>$customer,
            'brands' =>$brands
    ]);
    }
    public function saveShippingInfo(Request $request)
    {
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email = $request->email;
        $shipping->phone_number = $request->phone_number;
        $shipping->address = $request->address;
        $shipping->save();
        
        $shippingId = Session::put('shippingId',$shipping->id);
        return Redirect('/checkout-payment');

    }

    public function paymentForm()
    {
      $brands = Brand::where('publication_status',1)->get();


        return view('front-end.payment.payment',
            [
                'brands' =>$brands
            ]
        );
    }
    public function newOrder(Request $request)
    {
        $paymentType = $request->payment_type;
        if($paymentType == 'cash')
        {
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('orderTotal');
            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderDetails();
                $orderDetail->order_id = $order->id;
                $orderDetail->payment_id = $payment->id;
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->product_name = $cartProduct->name;
                $orderDetail->product_price = $cartProduct->price;
                $orderDetail->product_quantity = $cartProduct->qty;
                $orderDetail->product_image = $cartProduct->options->image;
                $orderDetail->save();

            }
           
            Cart::destroy();
            return redirect('/complete-order');


        }
        else if ($paymentType == 'paypal')
        {

   }
        else if ($paymentType == 'bkash')
        {

        }
        else if ($paymentType == 'dbbl')
        {

        }

      
    }

    public function completeOrder()
    {
        $brands = Brand::where('publication_status',1)->get();
        return view('front-end.payment.complete-order',
            [
                'brands' => $brands
            ]
        );
    }
    public function EmailCheck($a)
    {
       $customer =  Customer::where('email',$a)->first();
       if ($customer) {
           echo "Already Exsits";
       }
       else
       {
         echo "Not Avilable";
       }
    }
}
