<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::all();
    return view('company.index', compact('companies'));
    }
    public function create(){
        return view('company.create');
    }
    public function store(Request $request){
//        dd($request->all());
        $request->validate([
            'name' => 'required',
            'company_size'=>'required',
            'country'=>'required',
            'city'=>'required'
        ]);

        Company::create([
            'name' => $request->name,
            'company_size'=>$request->company_size,
            'country'=>$request->country,
            'city'=>$request->city
        ]);
        return redirect()->route('companies.index');


    }
    public function show($id){
        $company = Company::find($id);
        return view('company.show', compact('company'));
    }

    public function edit($id){
        $company = Company::find($id);
        return view('company.edit', compact('company'));
    }

    public function update(Request $request, $id){

        Company::find($id)->update($request->all());
        return redirect()->route('companies.index');
    }
    public function destroy($id){
        Company::find($id)->delete();
        return redirect()->route('companies.index');
    }


}
