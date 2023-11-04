<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'company_name' => 'required|string',
            'company_size' => 'required|string',
            'country_or_region' => 'required|string',
            'message' => 'required|string',
        ]);

        Contact::create($attributes);

        return redirect('/contact')->with('success', 'Our team will respond to Your Message within 24 Hours.');
    }
}
