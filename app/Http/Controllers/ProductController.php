<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'ProductDescription' => 'required',
            'ProductPrice' => 'required',
        ]);

        $product = new Products;

        $product -> ProductName = $request->input('ProductName');
        $product -> ProductDescription = $request->input('ProductDescription');
        $product -> ProductPrice = $request->input('ProductPrice');

        $product -> save();

        return  redirect() -> route('home')
            ->with('success', 'Product added Successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()   
    {
        
        $data = Products::all();
        return view ('availableProducts', ['Product' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        
        $data = Products::find($id);
        return view('EditProduct', ['Product' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data = Products::find($request->id);

        $data -> ProductName = $request -> ProductName;
        $data -> ProductDescription = $request -> ProductDescription;
        $data -> ProductPrice = $request -> ProductPrice;

        $data -> save();
       
        return redirect() -> route('showProduct'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Products::find($id);
        $data -> delete();
        return redirect() -> route('showProduct');
    }
}
