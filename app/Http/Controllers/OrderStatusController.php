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
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderStatusUpdate;
use App\Mail\OrderRejected;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderReceived;
use App\Mail\OrderNotReceived;


class OrderStatusController extends Controller
{
    public function viewOrderStatus($orderID){
        $orderInfo = OrderInfo::where('orderID', $orderID)->first();

        return view('Admin.admin-orders-perpage', ['orders' => $orderInfo]);
    }

    public function viewPerOrder($orderID){
        $orderInfo = OrderInfo::where('orderID', $orderID)->first();

        return view('User.user-order-history', ['orders' => $orderInfo]);
    }
    public function changeOrderStatus(Request $request)
    {
        $request->validate([
            'order_Status' => 'required',
        ]);
    
        $orders = OrderInfo::where('orderID', $request->input('OID'))->first();
    
        if ($request->has('action') && $request->input('action') === 'X NO') {
            // If the "X NO" button is clicked, update the order status to "cancelled"
            $orders->update([
                'order_Status' => 'Cancelled',
            ]);
    
            // Send an email when order is not received
            $orderDetails = [
                'customerFirstName' => $orders->user_FirstName,
                'customerLastName' => $orders->user_LastName,
                'orderID' => $orders->orderID,
                'orderItems' => $orders->orderItems,
                'orderTotalAmount' => $orders->order_TotalAmount,
                'orderDeliveryDate' => $orders->order_DeliveryDate,
                'orderDeliveryTime' => $orders->order_DeliveryTime,
            ];
    
            Mail::to(config('mail.from.address'))->send(new OrderNotReceived($orderDetails));
        } elseif ($request->has('action') && $request->input('action') === '✔ YES') {
            // If the "✔ YES" button is clicked, update the order status to "completed"
            $orders->update([
                'order_Status' => 'Completed',
            ]);
    
            // Send an email when order is received
            $orderDetails = [
                'customerFirstName' => $orders->user_FirstName,
                'customerLastName' => $orders->user_LastName,
                'orderID' => $orders->orderID,
                'orderItems' => $orders->orderItems,
                'orderTotalAmount' => $orders->order_TotalAmount,
                'orderDeliveryDate' => $orders->order_DeliveryDate,
                'orderDeliveryTime' => $orders->order_DeliveryTime,
            ];
    
            Mail::to(config('mail.from.address'))->send(new OrderReceived($orderDetails));
        }
    
        return view('User.user-profile', ['orders' => $orders]);
    }

    public function changeOrderStatusAdmin(Request $request)
    {
        $request->validate([
            'order_Status' => 'required',
        ]);
    
        $orders = OrderInfo::where('orderID', $request->input('OID'))->first();
    
        if ($request->has('action') && $request->input('action') === 'X REJECT') {
            // If the "X REJECT" button is clicked, update the order status to "rejected"
            $orders->update([
                'order_Status' => 'Rejected',
            ]);
    
            // Send an email when order is rejected
            $orderItemsFormatted = $orders->orderItems->map(function ($orderItem) {
                return "{$orderItem->product_name} (x{$orderItem->order_quantity})";
            })->implode(', ');
    
            $orderDetails = [
                'customerFirstName' => $orders->user_FirstName,
                'customerLastName' => $orders->user_LastName,
                'orderID' => $orders->orderID,
                'orderItems' => $orderItemsFormatted,
                'orderTotalAmount' => $orders->order_TotalAmount,
                'orderDeliveryDate' => $orders->order_DeliveryDate,
                'orderDeliveryTime' => $orders->order_DeliveryTime,
            ];
    
            $status = 'rejected';
    
            Mail::to($orders->user_Email)->send(new OrderRejected($orderDetails, $status));
        } elseif ($request->has('action') && $request->input('action') === '✔ APPROVE') {
            // If the "✔ APPROVE" button is clicked, update the order status to "approved"
            $orders->update([
                'order_Status' => 'Approved',
            ]);
    
            // Send an email when order is approved
            $orderItemsFormatted = $orders->orderItems->map(function ($orderItem) {
                return "{$orderItem->product_name} (x{$orderItem->order_quantity})";
            })->implode(', ');
    
            $orderDetails = [
                'customerFirstName' => $orders->user_FirstName,
                'customerLastName' => $orders->user_LastName,
                'orderID' => $orders->orderID,
                'orderItems' => $orderItemsFormatted,
                'orderTotalAmount' => $orders->order_TotalAmount,
                'orderDeliveryDate' => $orders->order_DeliveryDate,
                'orderDeliveryTime' => $orders->order_DeliveryTime,
            ];
    
            $status = 'approved';
    
            Mail::to($orders->user_Email)->send(new OrderStatusUpdate($orderDetails, $status));
        }
    
        return view('Admin.admin-orders-perpage', ['orders' => $orders]);
    }
    
    
    

}
