<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Assuming your model is named 'Contact'

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts',
            'phone' => 'required|phone|unique:contacts',
            'message' => 'required|string',
        ]);

        // Create a new Contact instance
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->message = $validatedData['message'];
        
        // Save the contact details to the database
        $contact->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Contact message submitted successfully!');
    }
}
