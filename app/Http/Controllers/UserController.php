<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function index(){
        return view("User.index");
    }

    public function showPage($page){
        return view("User.$page");
        
    }

    public function userLogin(Request $request){
        $validated = $request->validate([
            'user_Username' => 'required',
            'user_Password' => 'required'
        ]);
    
        $user = User::where('user_Username', $validated['user_Username'])->first();
    
        if($user && Hash::check($validated['user_Password'], $user->user_Password)) {
            auth()->login($user);
    
            // Store username in cookies
            $cookie = cookie('username', $validated['user_Username'], 60);
    
            return response()->json(['success' => true, 'message' => 'Login successful'])->withCookie($cookie);
        } else {
            // Failed to log in
            return response()->json(['success' => false, 'message' => 'Invalid username or password. Please try again.']);
        }
    }
    
    public function updateProfile(Request $request)
    {
        // Retrieve the user ID from the request
        $userID = $request->input('userID');
    
        // Log the received user ID
        Log::info("Received user ID for updateProfile: $userID");
    
        // Use the user ID to fetch the corresponding user from the database
        $user = User::find($userID);
    
        if (!$user) {
            // Log an error if the user is not found
            Log::error("User not found for updateProfile. UserID: $userID");
    
            // Handle the case where the user is not found
            return redirect()->back()->with('error', 'User not found');
        }
    
        // Validate the request data
        $validated = $request->validate([
            'user_FirstName' => 'required',
            'user_LastName' => 'required',
            'user_PhoneNum' => 'required',
            'user_Address' => 'required',
        ]);
    
        // Update the user's data
        $user->update($validated);
    
        // Redirect or respond accordingly
        // Log::info("Profile updated successfully for user ID: $userID");
        // return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function viewProfile($userID){
        $profile = User::where('userID', $userID)->first();
        return view('Admin.admin-manage-users', ['profile' => $profile]);
    }

    public function profileUpdate(Request $request, $userID){
        $request->validate([
            'user_Username' => 'required',
        ]);
    
        $profile = User::where('userID', $userID)->first();
    
        $profile->update([
            'user_Username' => $request->input('user_Username'),
        ]);
    
        return redirect('/admin-dashboard#dashboard');
    }

    public function profileDelete($prodID)
    {
        $profile = User::where('userID', $prodID)->first();
        $profile->delete();

        return redirect('/admin-dashboard#dashboard');

    }
    

    
    
    



}
