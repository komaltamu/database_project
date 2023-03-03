<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    
    public function create()
    {
        return view('product.create');

    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required', 
            'price' => 'required|integer',
            'quantity' =>'required|integer'
        ]);

       Product::create($validated);
       return redirect(route('index'))->with('success' , 'product successfully created'); 
    }

    public function index()
    {
        $products = Product::all() ;
        $products_with_highest_price = Product::all()->sortByDesc('price')->first();
        $products_with_highest_quantity = Product::all()->sortByDesc('quantity')->first();
        $products_with_2nd_highest_price = Product::all()->sortByDesc('price')->skip(1)->first(); 
        
        return view('product.index', compact('products', 'products_with_highest_price', 'products_with_highest_quantity', 'products_with_2nd_highest_price'));
    }

    public function edit($id)
    {
       $product =  Product::find($id);
       
       return view('product.edit', compact('product')); 
    }

    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $product =  Product::find($id);

        $product->update($validated);

        return redirect(route('index'))->with('success', 'product successfully updated'); 

    }

    public function delete($id)
    {
        Product::destroy($id) ; 
        return back()->with('success', 'Product has been successfuly deleted'); 
    }
}
