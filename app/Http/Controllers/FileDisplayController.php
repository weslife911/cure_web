<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileDisplayController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function ca(Request $request) {

        $field = "";
        $message = "";
        $file_url = "";
        $payment_url = "https://link.tranzak.net/SoYC137shxfTTydx6";

        if(Auth::user()->field_of_study === "Engineering") {
            $field = "ENG";
        } else {
            $field = "MED";
        }

        $files = Storage::disk("s3")->files("THE_CURE/CA/{$field}");

        if(Auth::user()->amount === 0) {
            $files = [];
            $message = "Pay tuition fees to have access to all files";
        } elseif(Auth::user()->amount > 0 && Auth::user()->amount <= 10000) {
            $files = collect($files)->take(2);
            $message = "Complete tuition fees to get access to all files";
        } elseif(Auth::user()->amount > 10000 && Auth::user()->amount <= 20000) {
            $files = collect($files)->take(3);
            $message = "Complete tuition fees to get access to all files";
        } elseif(Auth::user()->amount > 20000 && Auth::user()->amount <= 30000) {
            $files = collect($files)->take(4);
            $message = "Complete tuition fees to get access to all files";
        } else {
            $files = collect($files)->take(count($files));
        }




        return view("verified.ca", compact(["message", "files", "payment_url"]));
    }

    public function revision() {
        $field = "";
        $message = "";
        $file_url = "";
        $payment_url = "https://link.tranzak.net/SoYC137shxfTTydx6";

        if(Auth::user()->field_of_study === "Engineering") {
            $field = "ENG";
        } else {
            $field = "MED";
        }

        $files = Storage::disk("s3")->files("THE_CURE/REVISION/{$field}");

        if(Auth::user()->amount === 0) {
            $files = [];
            $message = "Pay tuition fees to have access to all files";
        } elseif(Auth::user()->amount > 0 && Auth::user()->amount <= 30000) {
            $files = collect($files)->take(1);
            $message = "Complete tuition fees to get access to all files";
        } else {
            $files = collect($files)->take(count($files));
        }


        return view("verified.revision", compact(["message", "files", "payment_url"]));
    }

    public function notes() {
        $field = "";
        $message = "";
        $file_url = "";
        $payment_url = "https://link.tranzak.net/SoYC137shxfTTydx6";

        if(Auth::user()->field_of_study === "Engineering") {
            $field = "ENG";
        } else {
            $field = "MED";
        }

        $files = Storage::disk("s3")->files("THE_CURE/NOTES/{$field}");

        if(Auth::user()->amount === 0) {
            $files = [];
            $message = "Pay tuition fees to have access to all files";
        } elseif(Auth::user()->amount > 0 && Auth::user()->amount <= 30000) {
            $files = collect($files)->take(3);
            $message = "Complete tuition fees to get access to all files";
        } else {
            $files = collect($files)->take(count($files));
        }

        return view("verified.notes", compact(["message", "files", "payment_url"]));
    }
}
