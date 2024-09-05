<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    public function submitForm(Request $request)
    {
        $mailTo = 'declan.groenewoud@gmail.com';
        $subject = 'Contact Form Submission';
        $message = 'Name: ' . $request->input('name') . "\n";
        $message .= 'Email: ' . $request->input('email') . "\n";
        $message .= 'Message: ' . $request->input('message');

        mail($mailTo, $subject, $message);

        return redirect('/contact')->with('success', 'Form submitted successfully!');
    }
}
