<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\employee;
use Illuminate\Http\Request;
use Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = employee::all();
        

        return view('pages.admin.employee.adminEmployee')->with('employee', $employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
         'name' => 'required',
         'username' => 'required',
         'email' => 'required',

        ));


        $newEmployee = new employee;
        $newEmployee->name = $request->name;
        $newEmployee->username = $request->username;
        $newEmployee->position = $request->position;
        $newEmployee->salary = $request->salary;
        $newEmployee->password = 'alisport';
        $newEmployee->email = $request->email;
        $newEmployee->phone_number = $request->phone_number;

        $newEmployee->save();

        Session::flash('success', 'The employee was successfully saved!');

        return redirect()->route('employee.show', $newEmployee->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        $newEmployee = employee::find($employee);
        return view('pages.admin.employee.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        $Employee = employee::find($employee);
        return view('pages.admin.employee.edit')->with('Employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
         $this->validate($request, array(
         'name' => 'required',
         'username' => 'required',
         'email' => 'required',

        ));
     

        $newEmployee = employee::find($employee->id);
        $newEmployee->name = $request->name;
        $newEmployee->username = $request->username;
        $newEmployee->position = $request->position;
        $newEmployee->salary = $request->salary;
        $newEmployee->password = 'alisport';
        $newEmployee->email = $request->email;
        $newEmployee->phone_number = $request->phone_number;

        $newEmployee->save();

        Session::flash('success', 'The employee info was successfully updated!');

        return redirect()->route('employee.show', $newEmployee->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $Employee = employee::find($employee->id);
        $Employee->delete();
        Session::flash('success', 'The employee was successfully deleted!');
        return redirect()->route('employee.index');
    }
}
