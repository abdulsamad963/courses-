<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // @dd("llll");
        $products=Product::latest()->paginate(4);

        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$request->validate([
'name'=>'required',
'price'=>'required',
'detall'=>'required']);
    
    $product=Product::create($request->all()); 
    return redirect()->route('products.index')->with('success','product add successflly');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
            return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'detall'=>'required']);
                
                $product->update($request->all()); 
                return redirect()->route('products.index')->with('success','product update successflly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete(); 
        return redirect()->route('products.index')->with('success','product deleted successflly');
    }
}
