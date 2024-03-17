<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Don't forget to import the Order model

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            // Add more validation rules as needed
        ]);

        // Create a new order
        $order = new Order();
        $order->customer_name = $validatedData['customer_name'];
        $order->customer_email = $validatedData['customer_email'];
        // Add more fields as needed

        // Save the order
        $order->save();

        // Optionally, you can send an email notification here

        // Redirect or return a response
        return redirect()->back()->with('success', 'Order placed successfully!');
    }
}
