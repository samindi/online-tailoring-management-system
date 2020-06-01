<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedbacks;

class FeedbacksController extends Controller
{
    public function store(request $request)
    {
        dd($request->all());
       $feedback = new feedbacks;

       $feedback->Name = $request->Name;
       $feedback->Email = $request->Email;
       $feedback->Subject = $request->Subject;
       $feedback->Message= $request->Message;

       $feedback->save();
       return redirect()->back();

    }
}
