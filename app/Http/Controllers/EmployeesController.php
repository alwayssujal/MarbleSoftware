<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= Employees::all();
        return view('employees.index',[
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employees.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $employee = Employees::create([
            'firstname' => $request->input('firstname'),
            'middlename' => $request->input('middlename'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'hired_date' =>Carbon::now(),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'isEnabled' =>true,
            'pan_number' => $request->input('pan_number'),
            'citizenship_number' => $request->input('citizenship_number'),
            'dob' => Carbon::now(),
            'salary' => $request->input('salary'),

        ]);

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employees::find($id);
       return view('employees.edit')->with('employee', $employee);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $employee = Employees::where('id',$id)->update([
            'firstname' => $request->input('firstname'),
            'middlename' => $request->input('middlename'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'hired_date' => $request->input('hired_date'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'isEnabled' => $request->input('isEnabled'),
            'pan_number' => $request->input('pan_number'),
            'citizenship_number' => $request->input('citizenship_number'),
            'dob' => $request->input('dob'),
            'salary' => $request->input('salary'),

        ]);

        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employee)
    {
        $employee->delete();
        return redirect('/employees');
    }
}
