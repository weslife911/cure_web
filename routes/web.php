<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FileDisplayController;
use App\Http\Controllers\PaginatedImagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// AWS MIGRATION ROUTES




Route::middleware(["auth", "admin"])->group(
    function() {
        Route::get("/admin/users", [AdminController::class, "index"])->name("admin.dashboard");
        Route::get("/admin/users/{id}", [AdminController::class, "showUser"])->name(("get.user"));
        Route::post("/admin/users/{id}", [AdminController::class, "updateUser"])->name("update.user");
        Route::get("/admin/users/delete/{id}", [AdminController::class, "deleteUser"])->name("delete.user");
        Route::delete("/admin/users/delete/{id}", [AdminController::class, "deleteUserPost"])->name("delete.user");
        Route::get("/admin/users/result/{id}", [AdminController::class, "inputResults"])->name("admin.results");
        Route::post("/admin/users/result/{id}", [AdminController::class, "addResultsPost"])->name("admin.results");
        Route::get("/add-subjects", function() {

            DB::table("subjects")->insert([
                ["subject" => "Mathematics"],
                ["subject" => "Physics"],
                ["subject" => "Biology"],
                ["subject" => "Chemistry"],
                ["subject" => "French"],
                ["subject" => "General Knowledge"]
            ]);
        
            return "Added subjects successfully";
        });

        Route::get("/remove-results", function() {
            DB::table("results")->truncate();

            return "Removed results successfully";
        });

        Route::get("add-admin", function() {
            DB::table("users")->insert([
                ["name" => "admin", "email" => env("MAIL_USERNAME"), "field_of_study" => "Admin", "password" => Hash::make("wesleyadmin")]
            ]);
            
            return "Admin added successfully";
        });
    }
);


// Guest routes

Route::get('/', function () {
    return view("index");
})->name("guest.home");

Route::get("/about", function() {
    return view("guest.about");
})->name("about");

Route::get("/services", function() {
    return view("guest.services");
})->name("services");

Route::get("/testimonials", [PaginatedImagesController::class, "testimonials"])->name("testimonials");

Route::get("/activities", [PaginatedImagesController::class, "activities"])->name("activities");

Route::get("/contact", [EmailController::class, "sendMessage"])->name("contact")->middleware("auth");

// Show the password reset request form

Route::get("/forgot_password", [PasswordResetController::class, "showLinkRequestForm"])->name("password.request");

// Handle the password reset link request

Route::post('/forgot_password', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');

// Show the password reset form

Route::get('/reset_password/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');

// Handle the password reset

Route::post('/reset_password', [PasswordResetController::class, 'reset'])->name('password.update');


// Fallback Route

Route::fallback(function() {
    return view("fallback.404");
});


// Login

Route::get("/login", [UserController::class, "showLoginForm"])->name("login");
Route::post("/login", [UserController::class, "login"])->name("login");



// Register

Route::get("/register", [UserController::class, "showRegisterForm"])->name("register");
Route::post("/register", [UserController::class, "register"])->name("register");


// Email verification routes
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');


// Logout route

Route::post("/logout", [UserController::class, "logout"])->name("logout");

// Authenticated routes

Route::middleware(["auth", "verified"])->group(
    function() {
        Route::get("/student", function() {
            return view("verified.index");
        })->name("home");
    }
);



Route::get("/student/ca", [FileDisplayController::class, "ca"])->name("ca");
Route::get("/student/revision", [FileDisplayController::class, "revision"])->name("revision");
Route::get("/student/notes", [FileDisplayController::class, "notes"])->name("notes");

Route::post("/send_email", [EmailController::class, "sendEmail"])->name("send.email")->middleware("auth");

Route::get("/student/profile", [ProfileController::class, "viewProfile"])->name("student.profile");
Route::post("/student/profile_update", [ProfileController::class, "updateProfile"])->name("profile.update");

Route::get("/student/results", [ResultController::class, "showResult"])->name("student.results");

Route::get("/student/results/download", [ResultController::class, "generatePDF"])->name("ca.download");
