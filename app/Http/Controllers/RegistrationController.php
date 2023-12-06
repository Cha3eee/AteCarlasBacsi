<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str; 
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Log;



class RegistrationController extends Controller
{
    public function showRegForm()
    {
        return view('User.user-register');
    }

    public function userRegister(Request $request)
    {
        try{
            $validated = $request->validate([
                'userID' => 'required',
                'user_FirstName' => 'required|min:2|regex:/^[A-Za-z]+$/',
                'user_LastName' => 'required|min:3|regex:/^[A-Za-z]+$/',
                'user_Gender' => 'required',
                'user_Birthdate' => 'required',
                'user_Age' => 'required',
                'user_Address' => 'required|min:5',
                'user_PhoneNum' => 'required',
                'user_Email' => 'required|email',
                'user_VCode' => 'required',
                'user_Username' => 'required',
                'user_Password' => 'required|min:6|confirmed',
            ]);

        $validated['user_Password'] = Hash::make($validated['user_Password']);
        $user = User::create($validated);
        auth()->login($user);

        Log::info('User registered successfully: ' . $user->id);
        
        return redirect('/');
    } catch (\Exception $e) {
        Log::error('Error during user registration: ' . $e->getMessage());
        // Handle the error as needed
    }
    
        
    }

    public function sendVerificationCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_Email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        // Generate a verification code
        $verificationCode = Str::random(6);

        session(['verification_code' => $verificationCode]);
        Log::info('Verification code stored in session: ' . $verificationCode);

        // Send the verification code to the user's email
        $this->sendVerificationCodeEmail($request->input('user_Email'), $verificationCode);

        return response()->json(['message' => 'Verification code sent successfully']);
    }

    public function verify(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_VCode' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
    
        // Add debugging statement
        // Log the entered verification code
        Log::info('Entered Verification Code: ' . $request->input('user_VCode'));

    
        // Verify the entered code
        if ($this->isValidVerificationCode($request->input('user_VCode'))) {
            // Verification successful
            return response()->json(['message' => 'Verification successful']);
        } else {
            // Verification failed
            return response()->json(['error' => 'Invalid Verification Code'], 422);
        }
    }
    

    // Custom method to send the verification code to the user's email
    private function sendVerificationCodeEmail($email, $code)
    {
        try {
            Mail::to($email)->send(new VerificationCodeMail($code));
            Log::info('Verification email sent successfully.');
        } catch (\Exception $e) {
            Log::error('Error sending verification email: ' . $e->getMessage());
        }
    }

    // Custom method to check if the entered verification code is valid
    private function isValidVerificationCode($enteredCode)
    {
        // Implement your validation logic here
        $storedCode = session('verification_code');

        return $enteredCode === $storedCode;
    }

}
