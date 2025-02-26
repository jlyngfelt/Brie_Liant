<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request; //can be deleted
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveProductRequest $request)
    {
        // $product = new Product();

        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->price = $request->price;
        // $product->image_path = $request->image_path;

        // $product->save();



        $product = Product::create($request->validated());


        return redirect()->route('products.show', $product);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
