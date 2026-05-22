<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

// Contact form POST handler
Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email|max:100',
        'subject' => 'required|string|max:200',
        'message' => 'required|string|max:2000',
    ]);

    // TODO: Replace with your email address
    // Mail::to('aksel@email.com')->send(new \App\Mail\ContactMail($validated));

    return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
})->name('contact.send');
