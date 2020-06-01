<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirts;

class ShirtsController extends Controller
{
    //
    public function store(Request $request){

        $this->validate($request,
        ['Name'=>'required|max:30',
        'email'=>'required|max:30',
        'Telephone'=>'required|max:10',
        'Address'=>'required|max:50',
        'ExpectedDate'=>'required|max:10',
        'Collar'=>'required|max:10',
        'Sleeve'=>'required|max:10',
        'Cuff'=>'required|max:10',
        'Chest'=>'required|max:10',
        'Length'=>'required|max:10',
        'Material'=>'required|max:30',
        'colour'=>'required|max:15',
        ]);

        //dd($request->all());

        $shirt=new Shirts;

        $shirt->Name=$request->Name;
        $shirt->email=$request->email;
        $shirt->Telephone=$request->Telephone;
        $shirt->Address=$request->Address;
        $shirt->ExpectedDate=$request->ExpectedDate;
        $shirt->Collar=$request->Collar;
        $shirt->Sleeve=$request->Sleeve;
        $shirt->Cuff=$request->Cuff;
        $shirt->Chest=$request->Chest;
        $shirt->Length=$request->Length;
        $shirt->Material=$request->Material;
        $shirt->colour=$request->colour;
        $shirt->save();

        $data=Shirts::all();
        return redirect()->back()->with('orders',$data);
       
    }



    public function update($id){
        $order=Shirts::find($id);
        $order->iscompleted=1;
        $order->save();
        return redirect()->back();

    }

    public function notupdate($id){
        $order=Shirts::find($id);
        $order->iscompleted=0;
        $order->save();
        return redirect()->back();

    }


    public function confirm($id){
        $order=Shirts::find($id);
        $order->isconfirmed=1;
        $order->save();
        return redirect()->back();

    }

    public function notconfirm($id){
        $order=Shirts::find($id);
        $order->isconfirmed=0;
        $order->save();
        return redirect()->back();

    }

    public function cancel($id){
        $order=Shirts::find($id);
        $order->iscanceled=0;
        $order->save();
        return redirect()->back();
    }

    public function notcancel($id){
        $order=Shirts::find($id);
        $order->iscanceled=1;
        $order->save();
        return redirect()->back();
    }




    


}
