<?php

namespace App\Http\Controllers;


use Stripe\Checkout\Session as StripeSession;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;

class PayMethodController extends Controller
{

    public function __construct()
    {
        
    }

    public function success(Request $request){
      $request->session()->flash('paymentSuccess', 'Se ha realizado el pago correctamente');

      return redirect('/');
    }

    public function stripe(Request $request){

      $books = array(
        ['id' => 1, 'price' => 30000, 'currency' => 'mxn'],
        ['id' => 2, 'price' => 40000, 'currency' => 'mxn'],
        ['id' => 3, 'price' => 20000, 'currency' => 'mxn'],
        ['id' => 4, 'price' => 63000, 'currency' => 'mxn'],
        ['id' => 5, 'price' => 89999, 'currency' => 'mxn'],
      );

      $item       = $books[ $request->id - 1];
      $stripeKeys = config('paymentMethods.stripe');
      
      Stripe::setApiKey( $stripeKeys['secret'] );

      $checkOut = StripeSession::create([
          'payment_method_types' => ['card'],
          'line_items' => [[
            'price_data' => [
              'currency'     => $item['currency'],
              'unit_amount'  => $item['price'],
              'product_data' => [
                'name'   => 'Stubborn Attachments',
                'images' => ["https://paginaswebedwin.com/Assets/Img/". $item['id'] .".jpg"],
              ],
            ],
            'quantity' => 1,
          ]],
          'mode'        => 'payment',
          'success_url' => 'https://paginaswebedwin.com/paymentSuccess',
          'cancel_url'  => 'https://paginaswebedwin.com/',
      ]);

      return response()->json(['ID' => $checkOut->id]);
    }   
}
