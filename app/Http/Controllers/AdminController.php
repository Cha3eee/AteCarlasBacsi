<?php

namespace App\Http\Controllers;
use App\Models\Admins;
use App\Models\Products;
use App\Models\OrderInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function AdminLogin(){
        return view("Admin.admin-login");
    }

    // public function AdminDashboard(){
        

    //     $adminInfo = Admins::all();

    //     return view("Admin.admin-dashboard", ['admins' => $adminInfo]);

        
    // }

    public function dashboard()
    {
        $productInfo = Products::all();
        $adminInfo = Admins::all();
        $customerInfo = User::all();
        $ordersInformation = OrderInfo::take(6)->get();

    
        $countPendingOrders = OrderInfo::where('order_Status', 'Pending')->count();
        $countApprovedOrders = OrderInfo::where('order_Status', 'Approved')->count();
        $countCompletedOrders = OrderInfo::where('order_Status', 'Completed')->count();
        $countCancelledOrders = OrderInfo::whereIn('order_Status', ['Cancelled', 'Rejected'])->count();
    
        $showordersInfo = OrderInfo::whereIn('order_Status', ['Pending', 'Approved'])
                                   ->with('orderItems')
                                   ->get();
    
        $showordersComplete = OrderInfo::where('order_Status', 'Completed')
                                       ->with('orderItems')
                                       ->get();
    
        $showOrdersCancelled = OrderInfo::whereIn('order_Status', ['Cancelled', 'Rejected'])
                                        ->with('orderItems')
                                        ->get();
    
        return view("Admin.admin-dashboard", [
            'products' => $productInfo, 
            'admins' => $adminInfo, 
            'ordersInfo' => $showordersInfo,
            'ordersComplete' => $showordersComplete,
            'customerInfo' => $customerInfo,
            'ordersCancelled' => $showOrdersCancelled,
            'countPendingOrders' => $countPendingOrders,
            'countApprovedOrders' => $countApprovedOrders,
            'countCompletedOrders' => $countCompletedOrders,
            'countCancelledOrders' => $countCancelledOrders,
            'ordersInformation' => $ordersInformation,
        ]);
    }
    


    public function ManageAdmin($adminID){
        $admin = Admins::where('adminID', $adminID)->first();
        return view("Admin.admin-manage-admin", ['admins' => $admin]);
    }

    public function AddAdmin(){
        return view("Admin.admin-add-admin");
    }

    public function AdminProcessOrders(){
        return view("Admin.admin-process-orders");
    }

    public function AdminManageOrders(){
        return view("Admin.admin-orders-perpage");
    }

    public function AdminManageProducts(){
        return view("Admin.admin-manage-products");
    }

    public function AdminProductsPerPage(){
        return view("Admin.admin-products-perpage");
    }

    public function AdminManageUsers(){
        return view("Admin.admin-manage-users");
    }

    public function store(Request $request){
        $validated = $request->validate([
            'adminID' => 'required',
            'admin_FirstName' => 'required',
            'admin_LastName' => 'required',
            'admin_Gender' => 'required',
            'admin_Birthdate'=> 'required',
            'admin_Age' => 'required',
            'admin_Email' => 'required',
            'admin_PhoneNum' => 'required',
            'admin_Username' => ['required', Rule::unique('admins', 'admin_Username')],
            'admin_Password' => 'required|min:8'
        ]);

        $validated['admin_Password'] = Hash::make($validated['admin_Password']);
        $admin = Admins::create($validated);
        auth()->login($admin);

        return redirect('/admin-dashboard#dashboard');
    }

    public function login(){
        if (View::exists("Admin.admin-login")){
                return view("Admin.admin-login");
        }
        else{
            return abort(404);
        }
    }

    //Login PRocess of Admin

    public function loginprocess(Request $request)
    {
        $validated = $request->validate([
            "admin_Username" => 'required',
            "admin_Password" => 'required'
        ]);

        // Retrieve the user by the given username
        $user = Admins::where('admin_Username', $validated['admin_Username'])->first();

        // Check if the user exists and the password is correct
        if ($user && Hash::check($validated['admin_Password'], $user->admin_Password)) {
            auth()->login($user);
            $admin = auth()->user();
            session(['admin' => $admin]);


            return redirect('/admin-dashboard#dashboard')->with('admins', $admin);
        } else {
            // Authentication failed
            return redirect()->route('admin-login')->with('error', 'Invalid credentials');
        }
    }

    //Admin Edit
    public function adminEdit(Request $request, $adminID){
        $request->validate([
            'admin_FirstName' => 'required',
        ]);

        $admin = Admins::where('adminID', $adminID)->first();

        $admin->update(['admin_FirstName' => $request->input('admin_FirstName')]);

        return redirect('/admin-dashboard#dashboard');
    }

    public function adminDelete($adminID){
        $admin = Admins::where('adminID', $adminID)->first();
        $admin->delete();

        return redirect('/admin-dashboard#dashboard');


    }

    public function updateAdminProfile(Request $request, $adminID)
    {
        // Use the user ID to fetch the corresponding user from the database
        $admin = Admins::find($adminID);
    
        if (!$admin) {
            // Handle the case where the user is not found
            return redirect()->back()->with('error', 'User not found');
        }
    
        // Validate the request data
        $validated = $request->validate([
            'admin_FirstName' => 'required',
            'admin_LastName' => 'required',
            'admin_PhoneNum' => 'required',
            'admin_Email' => 'required|email',
            'admin_Username' => 'required',
            // Add other validation rules as needed
        ]);
    
        // Update the user's data
        $admin->update($validated);
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'User profile updated successfully');
    }
    

    
    
}
