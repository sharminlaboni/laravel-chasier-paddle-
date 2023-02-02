<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
 public function pay(Request $request){

   $payLink = $request->user()->chargeProduct(43952);
   return view('billing', ['payLink' => $payLink]);

}
}
