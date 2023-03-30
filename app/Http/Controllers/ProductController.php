<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
   public function index()
   {
       return view('welcome');
   }
   
   public function store1()
   {
        return view('add');
   }

   public function store(Request $request){
        $data= $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required'
        ]);
        Product::create($data);
        return back();
    }

    public function show(){
        $products = Product::all();
        return view('list', compact('products'));
    }

    public function edit(Product $product)
    {
        return view('modifier',compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required'
        ]);
        $product->update($request->all());
        return redirect()->route('show')
            ->with('success','Product modifié avec succès');
    }

    public function destroy(Product $product){
        $product->delete();
        return back();
    }

}
