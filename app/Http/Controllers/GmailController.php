<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\GmailDemo;
use App\Models\Alumni; // Make sure you have the correct model namespace

class GmailController extends Controller
{
    public function home(){
        return view('emails.home');
    }

    public function send(Request $request){
        $this->validate($request, [
            'body' => 'required'
        ]);

        $data = [
            'body' => $request->body,
        ];

        // Fetch alumni with email addresses
        $alumniWithEmail = Alumni::whereNotNull('email')->pluck('email');

        // Send email to each alumnus
        foreach ($alumniWithEmail as $email) {
            Mail::to($email)->send(new GmailDemo($data));
        }

        return back()->with('success', 'Emails sent successfully to all alumni with email addresses!');
    }
}
