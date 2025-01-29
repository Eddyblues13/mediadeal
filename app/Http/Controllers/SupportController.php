<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportRequestMail;

class SupportController extends Controller
{
    public function sendSupportRequest(Request $request)
    {
        // // Validate the form data
        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'subject' => 'required|string',
        //     'support_type' => 'required|in:1,2,3,4,5,6',
        // ]);
    
        // Prepare data for the email
        $data = $request->only('name', 'email', 'subject', 'support_type');
    
        // Send email
        Mail::to('support@mediadeal.ng')->send(new SupportRequestMail($data));
    
        // Redirect with success message
        return redirect()->back()->with('success', 'Your support request has been sent successfully!');
    }
    
}
