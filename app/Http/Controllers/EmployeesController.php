<?php

namespace App\Http\Controllers;

use App\Employee;

use Illuminate\Http\Request; /// added

class EmployeesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Return all employees
    public function show(){
        $employees = Employee::all();

        return json_encode($employees);
    }

    //Return employee by id
    public function index($id){
        $employee = Employee::find($id);

        return json_encode($employee);
    }

    public function store(Request $request)
    {
        $employee = new \App\Employee;
        $employee->name = $request['name'];
        return json_encode($employee); 
        // $employee->save();
    }

    public function edit(Request $request, $id)
    {
        $employee = Employee::find($id);
        if($request->get('name')) // literally had a comma after every if...
            $employee->name=$request->get('name');
        return json_encode($employee);
    }

    public function update(Request $request, $id) // update has to "update" everything
    {
        $employee= Employee::find($id);
        $employee->name=$request->get('name');
        return json_encode($employee);
        // $employee->save();
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employees')->with('success', 'Information has been deleted');
    }
}
