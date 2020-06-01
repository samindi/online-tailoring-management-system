<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirts;


class CancelController extends Controller
{

    public function index(){

        $cancel = Shirts::where('iscanceled',1)->get();
        
        return view('cancel')->with('cancel',$cancel);
    }

}

