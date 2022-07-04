<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\order;

class CheckoutController extends Controller
{
    public function checkout(Request $request){
        $qty= 0;
        $event=DB::table('event')
        ->select('*')
        ->where('id',$request->event_id)
        ->first();
        $name= $request->name;
        $hsd= $request->hsd;
        $phone= $request->phone;
        $email= $request->email;
        $qty=$request->quanti;
        $event_id=$request->event_id;
        $total= $event->price * (int)$qty;
        return view('checkout.checkout',compact('total','qty','name','hsd','phone','email','event_id'));
    }
    public function payment(Request $request){
        order::create([
            'customer_name'=>$request->customer_name,
            'customer_phone'=>$request->customer_phone,
            'customer_email'=>$request->customer_email,
            'totalQty'=>$request->totalQty,
            'totalPrice'=>$request->totalPrice,
            'event_id'=>$request->event_id,
            'date'=>$request->date,
        ]);
        echo "Thành công !!!";
    }
}
