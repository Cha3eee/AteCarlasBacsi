<?php

namespace App\Http\Controllers;
use App\Models\OrderInfo;
use App\Models\OrderItem;
use App\Models\Products;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        try {
            // Retrieve the 'cart' from the session
            $cart = session('cart', []);
    
            // Validate the request data
            $validated = $request->validate([
                'orderID' => 'required',
                'userID' => 'required',
                'user_FirstName' => 'required',
                'user_LastName' => 'required',
                'user_Email' => 'required',
                'user_PhoneNum' => 'required',
                'user_Address' => 'required',
                'order_Status' => 'required',
                'order_TotalAmount' => 'required',
                'order_DeliveryInstructions' => 'required',
                'order_DeliveryDate' => 'required',
                'order_DeliveryTime' => 'required',
                'order_PaymentMode' => 'required',
            ]);
    
            // Create a new order
            $order = OrderInfo::create([
                'orderID' => $validated['orderID'],
                'userID' => $validated['userID'],
                'user_FirstName' => $validated['user_FirstName'],
                'user_LastName' => $validated['user_LastName'],
                'user_Email' => $validated['user_Email'],
                'user_PhoneNum' => $validated['user_PhoneNum'],
                'user_Address' => $validated['user_Address'],
                'order_Status' => $validated['order_Status'],
                'order_TotalAmount' => $validated['order_TotalAmount'],
                'order_DeliveryInstructions' => $validated['order_DeliveryInstructions'],
                'order_DeliveryDate' => $validated['order_DeliveryDate'],
                'order_DeliveryTime' => $validated['order_DeliveryTime'],
                'order_PaymentMode' => $validated['order_PaymentMode'],
            ]);
    
            // Attach order items from the retrieved 'cart'
            foreach ($cart as $item) {
                OrderItem::create([
                    'orderID' => $order->orderID,
                    'product_name' => $item['product_name'],
                    'product_price' => $item['product_price'],
                    'order_quantity' => $item['order_quantity'],
                    'productID' => $item['productID'],
                ]);
    
                // Update product quantity
                $product = Products::find($item['productID']);
                if ($product) {
                    $product->decrement('product_quantity', $item['order_quantity']);
                }
            }
    
            // Store the order details in separate session variables
            session(['order_details' => $validated]);
            session(['order_id' => $order->orderID]);
    
            return response()->json(['message' => 'Order placed successfully']);
        } catch (Exception $e) {
            // Log the error
            Log::error('Error placing order: ' . $e->getMessage());
    
            // Return an error response or handle it accordingly
            return response()->json(['error' => 'Failed to place order. Please try again.'], 500);
        }
    }

    public function showPendingOrder($orderId)
    {
        // Find the order by order ID with a condition for pending status
        $order = OrderInfo::where('orderID', $orderId)
                          ->where('order_Status', 'Pending')
                          ->first();
    
        // If the order is not found or the status is not pending, you might want to handle that accordingly
    
        if (!$order) {
            // Handle case where order is not found or status is not pending
            return abort(404); // Or redirect to an error page, or any other appropriate action
        }
    
        // Find order items for the given order
        $orderItems = OrderItem::where('orderID', $orderId)->get();
    
        return view("Admin.admin-dashboard", compact('order', 'orderItems'));
    }
    



    // In your controller
    public function showAllOrders()
    {
        $orderDetails = session('order_details', []);
        $orderID = session('order_id');
    
        // Assuming you want to fetch orders from the database, adjust the query accordingly
        $ordersInfo = OrderInfo::all();
    
        return view("User.user-order-summary", compact('orderDetails', 'orderID', 'ordersInfo'));
    }
    
    
    
      
    
}
