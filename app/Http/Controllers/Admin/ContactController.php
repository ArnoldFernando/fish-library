<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $submissions = Contact::all(); // Fetch all submissions
        return view('admin.users.message.index', compact('submissions'));
    }
    //
    public function showForm()
    {
        return view('contact');  // Return the contact form view
    }

    public function handleFormSubmission(Request $request)
    {
        // Validate the incoming form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save the validated data to the database
        Contact::create($validated);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
