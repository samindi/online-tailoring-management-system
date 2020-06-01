<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirm;
use Illuminate\Support\Facades\Auth;

class CustomerNotificationController extends Controller
{
    
    public function index(){

        $email = Auth::user()->email;
        $notification = Confirm::where('email',$email)->get();
        return view('customernotification')->with('notification',$notification);
    }
}
