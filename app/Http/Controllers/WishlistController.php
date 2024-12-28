<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
{
    $wishlists = Auth::user()->wishlists()->with('product')->get();
    return view('wishlist', compact('wishlists'));
}

    public function store(Request $request, $productId)
    {
        $userId = Auth::id();
        
        // Check if product already in wishlist
        $exists = Wishlist::where('user_id', $userId)
            ->where('product_id', $productId)
            ->exists();
            
        if (!$exists) {
            Wishlist::create([
                'user_id' => $userId,
                'product_id' => $productId
            ]);
            return redirect()->back()->with('success', 'Product added to wishlist');
        }
        
        return redirect()->back()->with('error', 'Product already in wishlist');
    }

    public function destroy($id)
    {
        $wishlist = Wishlist::where('user_id', Auth::id())
            ->where('id', $id)
            ->firstOrFail();
            
        $wishlist->delete();
        
        return redirect()->back()->with('success', 'Product removed from wishlist');
    }
}