<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // Check for a category in the URL
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $products = $query->paginate(6)->appends($request->query());

        $categories = \App\Models\Category::all();

        return view('products.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveProductRequest $request)
    {
        $product = Product::create($request->validated());


        return redirect()->route('products.show', $product)
            ->with('status', 'Produkt skapad');
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
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'))
            ->with('status', 'Produkt uppdaterad');
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

        return redirect()->route('products.index')
            ->with('status', 'Produkt borttagen');
    }
}
