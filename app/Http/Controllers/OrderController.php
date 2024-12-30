<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders()
            ->with(['items.product'])
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('orderHistory', compact('orders'));
    }
}