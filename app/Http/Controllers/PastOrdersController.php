<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirts;
use Illuminate\Support\Facades\Auth;

class PastOrdersController extends Controller
{
    
    public function index(){
       $email = Auth::user()->email;

        $past = Shirts::where('email',$email)->get();
       
        return view('pastorders')->with('past',$past);
    }
}
