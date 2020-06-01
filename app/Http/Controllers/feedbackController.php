<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class feedbackController extends Controller
{
    public function store(Request $request){
        $this->validate($request,
            ['Message'=>'required',
            'Email'=>'required',
            'Subject'=>'required|max:50',
            'Name'=>'required|max:30',
            ]);
           /* dd($request->all());*/
           $feedback = new Feedback;
    
           $feedback->Name = $request['Name'];
           $feedback->Email = $request['Email'];
           $feedback->Subject = $request['Subject'];
           $feedback->Message = $request['Message'];
    
           $feedback->save();
           return redirect()->back();
           $data=Feedback::all();


           return view('feedback')->with('feedback',$data);
    }
}
