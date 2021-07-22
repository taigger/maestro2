<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    // public function pay(Request $request){
    //  Stripe::setApiKey(env('STRIPE_SECRET'));//シークレットキー
 
    //   $charge = Charge::create(array(
    //         'amount' => 100,
    //         'currency' => 'jpy',
    //         'source'=> request()->stripeToken,
    //     ));
    //   return back();
    //  }
    //
}
