<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact()
    {
        return view('contact'); // Assuming your contact form view is named 'contact.blade.php'
    }
}
