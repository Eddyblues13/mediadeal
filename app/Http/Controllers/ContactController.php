<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;  


class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Store data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send email to admin
        Mail::to('support@mediadeal.ng')->send(new ContactMail($data));

        // Redirect with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

}
