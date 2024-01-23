<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use Illuminate\Support\Facades\Session;
use App\Mail\OtpMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function register(Request $request)
{
    // Validation
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    if ($validator->fails()) {
        return response(['errors' => $validator->errors()], 422);
    }

    // Check if user with this email already exists
    $userFound = User::where('email', $request->get('email'))->first();

    if ($userFound) {
        return response(["message" => 'User with this email exists'], 400);
    }

    // Verify if password and confirm_password match
    if ($request->get('password') == $request->get('password_confirmation')) {

        // Create a new user
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));

        // Generate and send OTP to email
        $otp = mt_rand(100088, 999999);

        // save otp in the database
        $user->otp_token = $otp;
        $user->save();

        // Save OTP in the session for verification
        $request->session()->put('otp', $otp);
        $request->session()->put('userId', $user->id);

        // Send OTP via email
        $verificationUrl = url('/api/verify-otp?user_id=' . $user->id . '&code=' . $otp);
        Mail::to($user->email)->send(new OtpMail($verificationUrl));
        // Mail::to($user->email)->send(new OtpMail('http://locahost:5000/verify_otp?code='.$otp));

        return ["message" => "success"];

    } else {
        return response(["message" => "Password and confirm password do not match"], 400);
    }
}

public function verifyOTP(Request $request) {
    // The incoming URL is in this format: http://localhost/verify_opt?code=99999
    $code = $request->query('code');
    $userId = $request->query('user_id');

    $user = User::find($userId);

    // Verify the code with the otp_token that has been stored during registration
    if ($user && $code == $user->otp_token) {
        // Update the user account, indicating that the email is verified
        $user->email_verified_at = now();

        $user->save();
        return ["message" => "OTP is valid, your account is registered"];
        
    } else {
        // The OTP is not valid
        return response(["message" => "OTP is invalid"], 400);
    }
}
public function login(Request $request)
{
    // Check if remember_token is present in the request
    if ($request->has('remember_token')) {
        $user = $this->attemptLoginWithRememberToken($request->input('remember_token'));
    } else {
        // Validate email and password
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->all());
        }

        // Attempt to authenticate using email and password
        if (!Auth::attempt(request(['email', 'password']))) {
            return response()->json(['error' => 'Invalid credentials'], 403);
        }

        $user = $request->user();
    }

    // For "remember me," issue an access token without explicit expiration
    $token = $user->createToken('AuthToken')->plainTextToken;
    // Save the token to the api_token column
    $user->update(['api_token' => $token]);

    // If remember_me is true, return the remember_token
    if ($request->input('remember_me')) {
        $user->update(['remember_token' => $rememberToken = Str::random(60)]);
        return response()->json(['token' => $token, 'user' => $user, 'remember_token' => $rememberToken]);
    } else {
        return response()->json(['token' => $token, 'user' => $user]);
    }
}
}
