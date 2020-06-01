<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EmployeesController extends Controller
{
    public function index()
    {
        $emplo = Employees::all();
        return view('admin.employees')
        ->with('emplo',$emplo)
        ;
    }

    public function store(Request $request)
    {
        $emplo = new Employees ;

        $emplo->Name = $request->input('Name');
        $emplo->Phone = $request->input('Phone');
        $emplo->Email = $request->input('Email');
        $emplo->Address = $request->input('Address');
        $emplo->Salary = $request->input('Salary');
        
        $emplo->save();
        return redirect('/employees')->with('status','Data Added');
    }

    public function edit($id)
    {
        $emplo = Employees::findorFail($id);
        return view('admin.Emplo.edit')
        ->with('emplo',$emplo)
        ;

    }

    public function update(Request $request, $id)
    {
        $emplo = Employees::findorFail($id);
        $emplo->name = $request->input('name');
        $emplo->phone = $request->input('phone');
        $emplo->email = $request->input('email');
        $emplo->address = $request->input('address');
        $emplo->salary = $request->input('salary');
        $emplo->update();

        return redirect('/employees')->with('status','Data Updated');
    
    }

    public function delete($id)
    {
        $emplo = Employees::findorFail($id);
        $emplo->delete();

        return redirect('/employees')->with('status','Data Deleted');


    }

}
