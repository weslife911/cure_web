<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $users = User::all();
        return view("admin.index", compact(["users"]));
    }

    public function showUser($id) {
        $user = User::findOrFail($id);

        if (!$user) {
            abort(404, 'User not found');
        }

        return view("admin.details", compact(["user"]));
    }

    public function updateUser(Request $request, $id) {
        if($request->isMethod("post")) {
            $request->validate([
                "amount" => "required|integer"
            ]);

            $user = User::findOrFail($id);

            if (!$user) {
                abort(404, 'User not found');
            }

            $user->amount = $request->input("amount");
            $user->save();

            return back()->with("status", "Profile updated Succesfully!!!");

        }
    }

    public function deleteUser($id) {
        $user = User::findOrFail($id);

        if (!$user) {
            abort(404, 'User not found');
        }
        return view("admin.delete", compact(["user"]));
    }

    public function deleteUserPost($id) {
        $user = User::findOrFail($id);

        if (!$user) {
            abort(404, 'User not found');
        }

        $user->delete();

        return redirect()->route("admin.dashboard");
    }

    public function inputResults($id) {
        $user = User::findOrFail($id);

        return view("admin.add_result", compact(["user"]));
    }

    public function addResultsPost($id, Request $request) {
        $user = User::findOrFail($id);

        if (!$user) {
            abort(404, 'User not found');
        }

        $user->results()->create([
            "user_id" => $user->id,
            'subject_id' => $request->input('subject'),
            'score' => $request->input('score'),
        ]);

        return redirect()->route("admin.dashboard");
    }
}
