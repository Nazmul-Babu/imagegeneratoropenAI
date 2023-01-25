<?php

namespace App\Http\Controllers;
use App\Models\plan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Cashier\Billable;



class planController extends Controller
{
    public function index()
    {
        $plans=plan::get();
        return view('plans',compact('plans'));
    }
    public function show(plan $plan,Request $request){
       $intent=auth()->user()->createSetupIntent();
       return view('subscription',compact(['plan','intent']));
    }
    public function subscription(Request $request){
       $plan=plan::find($request->plan);

       $subscription=$request->user()->newsubscription($request->plan, $plan->stripe_plan)->create($request->token);

       return view('subscription_success');
    }
}
