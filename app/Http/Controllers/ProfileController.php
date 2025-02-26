<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function viewProfile() {
        return view("verified.profile");
    }

    public function updateProfile(Request $request) {
        if($request->isMethod("post")) {
            $validator = $request->validate([
                'name' => 'required|string|max:255',
                'field_of_study' => 'required|string|max:255',
                "country_code" => "required|string",
                'phone' => 'required|string|max:25',
            ]);

            $user = Auth::user();

            $user->update($validator);

            return back()->with("status", "Profile updated Succesfully!!!");

        }
    }
}
