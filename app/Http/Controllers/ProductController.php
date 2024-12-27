<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Public Products Page
    public function indexPublic()
    {
    $products = Product::all();
    return view('shop', compact('products')); // Updated view file name
    }


    // Admin Products Page
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show form to create a new product
    public function create()
    {
        return view('products.create');
    }

    // Store new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|url',
            'category' => 'required',
        ]);

        $data = $request->all();

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Show product edit form
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update existing product
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image',
            'category' => 'required',
        ]);

        $data = $request->all();

        // Handle file upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Delete a product
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    //fetch product details to detail produk page
    public function show($id)
    {
        $product = Product::findOrFail($id); // Fetch the product by ID
        return view('productdetails', compact('product'));
    }

}
