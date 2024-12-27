<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // Check if the product is already in the cart
    $cartItem = Cart::where('user_id', auth()->id())
                    ->where('product_id', $id)
                    ->first();

    if ($cartItem) {
        // Increment the quantity if already in the cart
        $cartItem->increment('quantity');
    } else {
        // Add new cart item
        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $id,
            'quantity' => 1,
        ]);
    }

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    public function index()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        return view('cart', compact('cartItems'));
    }

    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);

        // Check if the logged-in user owns the cart item
        if ($cartItem->user_id !== auth()->id()) {
            return redirect()->route('cart.index')->with('error', 'You cannot remove this item.');
        }

        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from the cart.');
    }

    public function checkout()
    {
        $cartItems = auth()->user()->cart()->with('product')->get();
        $total = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        return view('checkout', compact('cartItems', 'total'));
    }
}
