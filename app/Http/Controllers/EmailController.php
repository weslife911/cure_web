<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMessage() {
        return view("verified.contact");
    }

    public function sendEmail(Request $request) {
        

        if($request->isMethod("post")) {

            $request->validate([
                "message" => "required|string"
            ]);

            Mail::raw($request->message . "\nby " . Auth::user()->email, function($message) {
                $message->to(env("MAIL_USERNAME"))
                ->subject("Message to Admin")
                ->from(Auth::user()->email);
            });

            return redirect()->back()->with("status", "Email sent succesfully!!!");
        }

    }
}
