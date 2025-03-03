<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request; //can be deleted
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

        // Kolla om vi har fått in en kategori i URL:en (från dropdown-filtret)
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Hämta produkter (med eller utan filter)
        $products = $query->paginate(6);

        // Hämta alla kategorier för dropdown-listan
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
        // $product = new Product();

        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->price = $request->price;
        // $product->image_path = $request->image_path;

        // $product->save();



        $product = Product::create($request->validated());


        return redirect()->route('products.show', $product)
            ->with('status', 'Product created');
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
            ->with('status', 'Product edited');
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
            ->with('status', 'Product deleted');
    }
}
