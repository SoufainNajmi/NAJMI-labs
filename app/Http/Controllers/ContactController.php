<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here we would typically save to DB or send mail.
        // For now, redirect back with success message.

        return redirect()->back()->with('success', 'Your message has been sent successfully. I will get back to you soon!');
    }
}
