<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function index()
    {
        //
        return view('signin');
    }

    public function create()
    {
        //
    }
    public function store(StoreemployeeRequest $request)
    {
        //
        $employees = new Employee();
        $employees->firstname = $request->firstname;
        $employees->lastname = $request->lastname;
        $employees->email = $request->email;
        $employees->role = $request->role;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/task',$filename);
            $employees->image = $filename;
        }
        $employees->save();
        return view('dashboard');
    }

    public function show(employee $employee)
    {
        //
    }

    public function edit(employee $employee)
    {
        //
    }

    public function update(UpdateemployeeRequest $request, employee $employee)
    {
        //
    }

    public function destroy(employee $employee)
    {
        //
    }

    public function signIn()
    {
        return view('signin');
    }
    public function signUp()
    {
        return view('signup');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
