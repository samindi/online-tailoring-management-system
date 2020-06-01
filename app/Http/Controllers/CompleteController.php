<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complete;
use Illuminate\Support\Facades\Input;

class CompleteController extends Controller
{

    public function store(Request $request)
    {

        $this->validate($request,
        ['order_id'=>'required',
        'status'=>'required|max:100|min:5',
        'email'=>'required',
        'price'=>'required',
        'image'=>'required',
        
        ]);

        //dd($request->all());
        $complete = new Complete();

        $complete->order_id = $request->input('order_id');
        $complete->status = $request->input('status');
        $complete->email = $request->input('email');
        $complete->price = $request->input('price');

        if($file = $request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/images/', $filename);
            $complete->image = $filename;
        }



       

       

       /*if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');

        } else{
            $imageName = "name";
        }

       

        $complete = new Complete();

        $complete->status = $request->input('status');
        $complete->email = $request->input('email');
        $complete->price = $request->input('price');
        $complete->image = $imageName;*/



        
        $complete->save();
        return redirect('/orders')->with('status','Message Sent Successfully');
        
       // return view('order')->with('status','Message Sent');
        
        
    }
    //
}
