<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Public Products Page
    public function indexPublic(Request $request)
    {
        // Ambil nilai parameter search
        $searchTerm = $request->input('search');
    
        // Jika ada keyword, filter produk, klo nggak tampilin semua produk
        $products = Product::when($searchTerm, function ($query, $searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('category', 'like', '%' . $searchTerm . '%');
        })->get();
    
        return view('shop', compact('products', 'searchTerm'));
    }
    


    // Admin Products Page
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

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

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, Product $product)
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

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    //fetch product details to detail produk page
    public function show($id)
    {
        $product = Product::findOrFail($id); // Fetch the product by ID
        $stockStatus = $product->stock > 0 ? 'In Stock (' . $product->stock . ' units)' : 'Out of Stock';
        $maxQuantity = $product->stock;
        return view('productdetails', compact('product', 'stockStatus', 'maxQuantity'));
    }
    
}
