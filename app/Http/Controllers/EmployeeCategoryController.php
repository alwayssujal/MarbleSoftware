<?php

namespace App\Http\Controllers;

use App\Models\Employee_Category;
use Illuminate\Http\Request;

class EmployeeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees_categories= Employee_Category::all();
        return view('employees_category.index',[
            'employees_categories'=> $employees_categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees_category = Employee_Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'isEnabled' =>true
        ]);

        return redirect('/employees_category');
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
         
        $employees_category=Employee_Category::find($id);
        return view('employees_category.edit')->with('employees_category', $employees_category);
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
        $employees_category = Employee_Category::where('id',$id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'isEnabled' => $request->input('isEnabled'),
        ]);
        return redirect('/employees_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee_Category $employees_category)
    {
        $employees_category->delete();
        return redirect('/employees_category');
    }
}
