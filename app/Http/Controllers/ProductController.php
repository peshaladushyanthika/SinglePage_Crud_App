<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peshala_list_product;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Peshala_list_product::all();
      return view ('pages.index')->with('products', $products);
    }

    public function store(Request $request){

        $product = new Peshala_list_product;
        $product->id = $request->input('id');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->status = $request->input('status');
        $product->save();
        return redirect('data')->with('flash_message', 'Product Addedd!');  

        // return response()->json([
        //     'message'=>'added product',
        // ]);


    }

    public function getData(){

        $products = Peshala_list_product::all();
        return view('welcome',['products'=>$products]);
        // return response()->json([
        //     'retrieve data'
        // ]);
        
    }

    
    public function create()
    {
        return view('pages.create');
    }
 
  
    
 
    
    public function show($id)
    {
        $products = Peshala_list_product::find($id);
        return view('pages.show')->with('products', $products);
    }
 
    
    public function edit($id)
    {
        $product = Peshala_list_product::find($id);
        return view('pages.edit')->with('product', $product);
    }
 
  
    public function update(Request $request, $id)
    {
        $product = Peshala_list_product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('data')->with('flash_message', 'product Updated!');  
    }
 
  
    public function destroy($id)
    {
        Peshala_list_product::destroy($id);
        return redirect('data')->with('flash_message', 'product deleted!');  
    }
    
}
