<?php

namespace App\Http\Controllers;

use App\Models\plan;


use Illuminate\Http\Request;

class PlanController extends Controller
{
public function index(){
  $plans = plan::all();

  // $subscriptions = auth()->user()->subscriptions()->active()->get();

  // $currentplan = null;
  // foreach($plans as $plan){
  //   if(auth()->user()->subscribed($plan->name)){
  //     $currentplan = $plan->name;
  //   }

  // }
return view('plans',compact('plans'
// ,'subscriptions','currentplan'
));

}
public function subscribe(Request $request){
  $plan = json_decode(($request->plan));
//  dd($plan->name);
  $payLink = $request->user()->newSubscription($plan->name ,$plan->plan_id)

  ->returnTo(route('dashboard'))
  ->create();

return view('billing', ['payLink' => $payLink]);
}

 
  //  public function cancel(Request $request,Subscribtion $subcripton){
  //      $request->user()->subscription($subscriptions->name)->active();
  //      return redirect('/plans');
  //  }
   
// public function swap(Request $request){
//   $plan = json_decode($request->plan);
//   $subscription = auth()->user()->subscription($request->currentplan)->swapAndInvoice($plan->plan_id);
//   return redirect()->route('dashboard');

// }
// public function subscribe_index(){
//   $subscriptions = Subscription :: all();
//   return view('plans',compact('subscriptions'));

// }
    public function create(){

    }
}
