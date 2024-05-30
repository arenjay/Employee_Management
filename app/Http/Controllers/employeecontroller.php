<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;

class employeecontroller extends Controller
{
    public function index()
    {
        $employees = employees::get();
        return view('employee.index',compact('employees'));
    }

    public function store(Request $request){


        employees::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'DOB'=>$request->DOB,
            'phone'=>$request->phone,


        ]);

        return redirect('employee');
    }

    public function edit(int $id){
        $employees = employees::findOrFail($id);
        return view('employee.update',compact('employees'));
    }

    public function update(Request $request ,int $id){
         employees::findOrFail($id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'DOB'=>$request->DOB,
            'phone'=>$request->phone,


         ]);
         return redirect('employee');
    }

}
