<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['middleware' => 'web'], function () {
//     Route::post('/verify_otp', [AuthController::class, 'verifyOTP']);
//     // Mail::to('mailtrap@hychin.tech')->send(new OtpMail($activateLink));
// });

// Route::get('/verify_otp', [AuthController::class, 'verifyOTP']);



