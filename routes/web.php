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
use App\Models\Subject;
use Illuminate\Support\Facades\Route;

// AWS MIGRATION ROUTES


Route::get("/run-migration", function() {
    DB::table("subjects")->insert([
        ["subject" => "Mathematics"],
        ["subject" => "French"],
        ["subject" => "Physics"],
        ["subject" => "Chemistry"],
        ["subject" => "Biology"],
        ["subject" => "General Knowledge"]
    ]);

    DB::table("users")->insert([
        ["name" => "weslife", "email" => "thecurefoundationgroup@gmail.com", "field_of_study" => "Admin", "password" => Hash::make("wesleyadmin"), "is_admin" => 1]
    ]);

    return "Migrations executed successfully";
});

Route::middleware(["auth", "admin"])->group(
    function() {
        Route::get("/admin/users", [AdminController::class, "index"])->name("admin.dashboard");
        Route::get("/admin/users/{id}", [AdminController::class, "showUser"])->name(("get.user"));
        Route::post("/admin/users/{id}", [AdminController::class, "updateUser"])->name("update.user");
        Route::get("/admin/users/delete/{id}", [AdminController::class, "deleteUser"])->name("delete.user");
        Route::delete("/admin/users/delete/{id}", [AdminController::class, "deleteUserPost"])->name("delete.user");
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
