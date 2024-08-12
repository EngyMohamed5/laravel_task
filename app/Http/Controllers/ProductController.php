<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('company')->get();
        return view('product.index', compact('products'));

    }
    public function create(Request $request){
        $companies = Company::get();
        return view('product.create',compact('companies'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'expiration_date' => 'required|date',
            'details' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);


        Product::create([
            'name' => $request->name,
            'expiration_date' => $request->expiration_date,
            'details' => $request->details,
            'company_id' => $request->company_id,
        ]);

        return redirect()->route('products.index');
    }
    public function show($id){
        $product = Product::with('company')->find($id);
        return view('product.show', compact('product'));
    }


    public function edit($id){
        $product = Product::find($id);
        $companies = Company::get();
        return view('product.edit', compact('product', 'companies'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'expiration_date' => 'required|date',
            'details' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);

        Product::find($id)->update($request->all());

        return redirect()->route('products.index');
    }
    public function destroy($id){
        Product::find($id)->delete();
        return redirect()->route('products.index');

    }
}
