<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirm;

class ConfirmController extends Controller
{
    public function store(Request $request){

        $this->validate($request,
        ['order_id'=>'required',
        'status'=>'required|max:100|min:5',
        'email'=>'required',
        
        ]);
    
        $confirm = new Confirm;
        
        $confirm->order_id = $request->input('order_id');
        $confirm->status = $request->input('status');
        $confirm->email = $request->input('email');

        $confirm->save();
        return redirect('/orders')->with('status','Message Sent Successfully');

        
        $data=Confirm::all();


           return view('orders')->with('confirm',$data);
    

    }

   


}
