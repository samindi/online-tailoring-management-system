<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complete;
use Illuminate\Support\Facades\Auth;


class completedorders extends Controller
{
    public function index(){

        $email = Auth::user()->email;
        $view = Complete::where('email',$email)->get();

        return view('completedorders')->with('view',$view);
        
    }





}
