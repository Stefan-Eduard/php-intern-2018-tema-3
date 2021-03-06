<?php

namespace App\Http\Controllers;

use App\Company;

use Illuminate\Http\Request; /// added

class CompaniesController extends Controller
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

    /**
     * Return all companies
     */
    public function show()
    {
        $companies = Company::all();
        
        return response()->json($companies);
        // return json_encode($companies);
    }

    public function index($id)
    {
        // $company = Company::getById($id);

        $company = Company::find($id);

        return response()->json($company);
        // return json_encode($company);
    }

    // public function create()
    // {
    //     return view('companies.create');
    // }

    public function store(Request $request)
    {
        $company = new \App\Company;
        $company->name = $request['name'];
        $company->description = $request['description'];

        $company->save();

        return response()->json($company);
        // return json_encode($company); 
    }

    public function edit(Request $request, $id)
    {
        $company = Company::find($id);
        if($request->get('name')) // literally had a comma after every if...
            $company->name=$request->get('name');
        if($request->get('description'))
            $company->description=$request->get('description');

        $company->save();

        return response()->json($company);
        // return json_encode($company);
    }

    public function update(Request $request, $id) // update has to "update" everything
    {
        $company= Company::find($id);
        $company->name=$request->get('name');
        $company->description=$request->get('description');

        $company->save();

        return response()->json($company);
        // return json_encode($company);
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return response()->json('Company removed successfully');
        // return redirect('companies')->with('success', 'Information has been deleted');
    }
}
